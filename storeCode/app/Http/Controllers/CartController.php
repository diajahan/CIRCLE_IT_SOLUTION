<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;


class CartController extends Controller
{

public function viewCart(){

    $customer_ip = request()->getClientIp();
    $cartitems = Cart::where('user_id', $customer_ip)->get();
    return view('view-cart',compact('cartitems'));
}

public function buyNow($id){

    $customer_ip = request()->getClientIp();

    $prod_check = Product::where('id','=', $id)->first();

    if($prod_check)
    {
        if(Cart::where('prod_id' ,$id)->where('user_id', $customer_ip)->exists())
        {
        //  return response()->json(['warning' =>'Item already added to your cart.']);
        }
        else
        {
            $cartitem = new Cart();
            $cartitem->prod_id = $id;
            $cartitem->user_id = $customer_ip;
            $cartitem->prod_qty =1;
            $cartitem-> save();
        return redirect('/view-cart');

        }

    }

}

    public function updateCart(Request $request){
        $customer_ip = request()->getClientIp();
        $product_id = $request->input('product_id');
        $product_qty = $request->input('quantity');

        if($customer_ip)
        {
            if(Cart::where('prod_id' , $product_id)->where('user_id', $customer_ip)->exists())
            {
            $cart = Cart::where('prod_id' , $product_id)->where('user_id', $customer_ip)->first();
            $cart -> prod_qty = $product_qty;
            $cart ->update();
            return response()->json(['status' => 'Quantity updated']);
            }
        }

    }

    public function addToCart(Request $request){


        $customer_ip = request()->getClientIp();
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');


                $prod_check = Product::where('id','=', $product_id)->first();

                if($prod_check)
                {
                    if(Cart::where('prod_id' ,$product_id)->where('user_id', $customer_ip)->exists())
                    {
                    //  return response()->json(['warning' =>'Item already added to your cart.']);
                    }
                    else
                    {
                        $cartitem = new Cart();
                        $cartitem->prod_id = $product_id;
                        $cartitem->user_id = $customer_ip;
                        $cartitem->prod_qty =$product_qty;
                        $cartitem-> save();
                        return response()->json(['status' =>' Item added to cart.']);
                        // return redirect('/')->with('status', 'Item added to cart.');

                    }

                }
            }

 public function deleteCartItem($id){

                $customer_ip = request()->getClientIp();


                    // $product_id = $request->input('product_id');
                    if(Cart::where('prod_id', $id)->where('user_id', $customer_ip)->exists())
                    {
                        $cartitem = Cart::where('prod_id', $id)->where('user_id', $customer_ip)->first();
                        $cartitem->delete();
                        return response()->json(['status' =>'Item deleted successfully']);
                    }

        }

public function loadCart(){

$customer_ip = request()->getClientIp();

$cartCount = Cart::where('user_id','=',$customer_ip)->count();

return response()->json(['count' => $cartCount]);

}





    // end of cart controller................................
}
