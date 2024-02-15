<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Coupon;
use App\Models\OrderItems;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class CheckoutController extends Controller
{

  public function checkoutPage(){

    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

    $cartitems =Cart::where('user_id', $guest_user)->get();
    // $categories = Category::all();
    return view('checkout', compact('cartitems'));
  }

  public function checkCoupon(Request $request){

        if (!Session::has('guest_user')) {
            $guest_user = 'guest_' .Str::random(10);
            Session::put('guest_user', $guest_user);
            Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
        } else {
            $guest_user = Session::get('guest_user');
        }

    if(Coupon::where('code','=',$request->coupon_code)->exists()){
        $coupon =Coupon::where('code','=',$request->coupon_code)->first();

        if($coupon->code != 'Sumaira'){
        if($coupon->status == 1 ){
           if(Order::where('user_id','=', $guest_user)->where('coupon','=', $coupon->code)->exists()){
                return response()->json(['status' =>200,'msg'=>'You Can not Use this Coupon 2nd Time']);
            }
            else{
                $cartitems =Cart::where('user_id', $guest_user)->get();
                $totalPrice=0;
                foreach($cartitems as $item){
                    $totalPrice += $item->products->selling_price*$item->prod_qty;
                }
                if($coupon->type == 'Percent'){
                    $couponPercentage= $coupon->value.'%';
                    $discountAmount=$totalPrice*($coupon->value/100);
                    $totalPrice =$totalPrice-$discountAmount;
                    $WithDcharge =$totalPrice + $request->delivery_charge;
                    return response()->json(['totalAmount'=>$totalPrice,'couponPercentage'=>$couponPercentage,
                     'couponCode'=>$request->coupon_code, 'withDcharge'=>$WithDcharge]);

                }elseif($coupon->type == 'Amount'){
                    $totalPrice =$totalPrice-$coupon->value;
                    return response()->json(['totalAmount'=>$totalPrice, 'WithDcharge'=>$WithDcharge]);
                }

            }

        }else{
            // return response()->json(['status' =>'Coupon Code is Deactivated']);
            return response()->json(['status' =>200 ,'msg'=>'Coupon Code is Deactive']);
        }
        }elseif($coupon->code == 'Sumaira'|| $coupon->code == 'MOM10'){
        if($coupon->status == 1 ){
                 $cartitems =Cart::where('user_id', $guest_user)->get();
                 $totalPrice=0;
                 foreach($cartitems as $item){
                     $totalPrice += $item->products->selling_price*$item->prod_qty;
                 }
                 if($coupon->type == 'Percent'){
                     $couponPercentage= $coupon->value.'%';
                     $discountAmount=$totalPrice*($coupon->value/100);
                     $totalPrice =$totalPrice-$discountAmount;
                     $WithDcharge =$totalPrice + $request->delivery_charge;
                      return response()->json(['totalAmount'=>$totalPrice,'couponPercentage'=>$couponPercentage,
                     'couponCode'=>$request->coupon_code, 'withDcharge'=>$WithDcharge]);
                 }elseif($coupon->type == 'Amount'){
                     $totalPrice =$totalPrice-$coupon->value;
                     return response()->json(['totalAmount'=>$totalPrice, 'WithDcharge'=>$WithDcharge]);
                 }



         }else{
             // return response()->json(['status' =>'Coupon Code is Deactivated']);
             return response()->json(['status' =>200 ,'msg'=>'Coupon Code is Deactive']);
         }

    }
    }else{
        // return response()->json(['status' =>'Coupon Code Does not exist']);
        return response()->json(['status' =>200 ,'msg'=>'Coupon Does not exists']);
    }

  }


  public function placeOrder(Request $request){


       $Tr_No=Order::orderBy('id', 'DESC')->first();
    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

    $order = new Order();
    $order->user_id = $guest_user;
    $order->customer_name = $request->input('customer_name');
    $order->phone = $request->input('phone');
    $order->shipping_address = $request->input('shipping_address');
    $order->delivery_charge = $request->input('delivery_charge');
    $order->coupon = $request->input('coupon_code_hidden');
    $order->grand_total= $request->input('grand_total_hidden');

    // To calculate total_price
    $total=0;
    $cartitems_total = Cart::where('user_id','=', $guest_user )->get();
    foreach($cartitems_total as $price)
    {
        $total +=  $price->products->selling_price*$price->prod_qty;
    }

    $order->total_price = $total;

    $coupon_code =$request->input('coupon_code_hidden');

    if($coupon_code !=''){
        $coupon =Coupon::where('code','=', $coupon_code)->first();
        if($coupon->type == 'Percent'){
            $discountAmount=$total*($coupon->value/100);
            $total =$total-$discountAmount;
    }

    elseif($coupon->type == 'Amount'){
        $total =$total-$coupon->value;

    }

    $order->coupon_applied_amount = $total;
    }

    $order->grand_total = $total + $request->input('delivery_charge');
    $order->tracking_no =++$Tr_No->tracking_no;
    $order->transaction_id =rand(1111,9999);
    $order->payment_id =rand(1111,9999);
    $order->save();


    $cartitems = Cart::where('user_id', $guest_user)->get();
    foreach($cartitems as $item)
    {
         $prod = Product::where('id',$item->prod_id)->first();
         OrderItems::create([
            'order_id' => $order->id,
            'tracking_no'=>$Tr_No->tracking_no,
            'prod_id' => $item->prod_id,
            'sku' => $prod->sku,
            'qty' => $item->prod_qty,
            'prod_size' => $item->prod_size,
            'unit_price' => $item->products->selling_price,
            'delivery_charge' => $request->input('delivery_charge_hidden')

        ]);

        // $prod = Product::where('id',$item->prod_id)->first();
        $prod->qty = $prod->qty - $item->prod_qty;
        $prod->update();
    }

    $user=User::where('user_id','=', $guest_user)->first();

    if(!$user)
    {
    $user = new User();
    $user->user_id = $guest_user;
    $user->name = $request->input('customer_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    $user->role_as = 'customer';
    $user->address = $request->input('shipping_address');
    $user->save();
    }

    $cartitems = Cart::where('user_id', $guest_user)->get();
    Cart::destroy($cartitems);
    return redirect('/view-products')->with('status', 'Order Placeed successfully');



} //end of placeOrder function........................



//end of controller class............................
}
