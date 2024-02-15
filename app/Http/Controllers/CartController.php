<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItems;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;


class CartController extends Controller
{

public function viewCart(){

    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

    $cartitems =Cart::where('user_id', $guest_user)->get();
    return view('view-cart',compact('cartitems'));
}

public function updateCart(Request $request){

        if (!Session::has('guest_user')) {
            $guest_user = 'guest_' . Str::random(10);
            Session::put('guest_user', $guest_user);
            Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
        } else {
            $guest_user = Session::get('guest_user');
        }

        $product_id = $request->input('product_id');
        $product_qty = $request->input('quantity');

        if($guest_user)
        {
            if(Cart::where('prod_id' , $product_id)->where('user_id', $guest_user)->exists())
            {
            $cart = Cart::where('prod_id' , $product_id)->where('user_id', $guest_user)->first();
            $cart -> prod_qty = $product_qty;
            $cart ->update();
            return response()->json(['status' => 'Quantity updated']);
            }
        }

    }

public function buyNow(Request $request){


    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

    $product_id = $request->input('product_id');
    $product_qty = $request->input('product_qty');
    $product_size = $request->input('product_size');


            $prod_check = Product::where('id','=', $product_id)->first();

            if($prod_check)
            {
                if(Cart::where('prod_id' ,$product_id)->where('user_id', $guest_user)->exists())
                {
                    // return response()->json([[1],'msg'=>'Item already added to cart']);
                    return response()->json(['status' =>201 ,'msg'=>'Item already added to cart']);
                }
                else
                {
                    $cartitem = new Cart();
                    $cartitem->prod_id = $product_id;
                    $cartitem->user_id = $guest_user;
                    $cartitem->prod_qty =$product_qty;
                    $cartitem->prod_size =$product_size;
                    $cartitem-> save();

                    return response()->json(['status' =>200 ,'msg'=>'Item added to cart']);

                }

            }

}



    public function addToCart(Request $request){


        if (!Session::has('guest_user')) {
            $guest_user = 'guest_' . Str::random(10);
            Session::put('guest_user', $guest_user);
            Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
        } else {
            $guest_user = Session::get('guest_user');
        }

        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $product_size = $request->input('product_size');


                $prod_check = Product::where('id','=', $product_id)->first();

                if($prod_check)
                {
                    if(Cart::where('prod_id' ,$product_id)->where('user_id', $guest_user)->exists())
                    {
                        return response()->json(['status' =>201 ,'msg'=>'Item already added to cart']);
                    }
                    else
                    {
                        $cartitem = new Cart();
                        $cartitem->prod_id = $product_id;
                        $cartitem->user_id = $guest_user;
                        $cartitem->prod_qty =$product_qty;
                        $cartitem->prod_size =$product_size;
                        $cartitem-> save();
                        return response()->json(['status' =>200 ,'msg'=>' Item added to cart.']);

                    }

                }

// End of function.......................................
}

 public function deleteCartItem($id){


    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }


                    // $product_id = $request->input('product_id');
                    if(Cart::where('prod_id', $id)->where('user_id', $guest_user)->exists())
                    {
                        $cartitem = Cart::where('prod_id', $id)->where('user_id', $guest_user)->first();
                        $cartitem->delete();
                        return response()->json(['status' =>'Item deleted successfully']);
                    }

        }

public function loadCart(){


    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

$cartCount = Cart::where('user_id','=',$guest_user)->count();

return response()->json(['count' => $cartCount]);

}





    // end of cart controller................................
}
