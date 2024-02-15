<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use GuzzleHttp\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItems;
use App\Models\SelectedCategory;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;


class ProductController extends Controller
{

  public function getCategory(){


        $response = Http::get('https://supplier.circle.com.bd/api/category-api');
        $data =json_decode($response->body());


         foreach($data as $cate){
            $cate = (array)$cate;
          Category::updateOrCreate(
            ['slug'=> $cate['slug']],
            [
            'id'=> $cate['id'],
            'parent_id'=> $cate['parent_id'],
            'category_name'=> $cate['name'],
             'level'=> $cate['level'],
            'order_level'=> $cate['order_level'],
            'image'=> $cate['cover_image'],
            'slug'=> $cate['slug'],
            'description'=> $cate['meta_description'],
            'status'=> $cate['status'],
            'featured'=> $cate['featured'],
            'meta_title'=> $cate['meta_title'],
            'meta_description'=> $cate['meta_description']
        ]);

    }

   return redirect()->back()->with('status','Category Stored Successfully');

}



public function test(Request $request){

        $response = Http::get('https://supplier.circle.com.bd/api/whole-product-api');

        // dd($response->collect());
        // echo "<pre>";
        // print_r($response->body());
        // die;
                // echo "<pre>";
                // print_r($request->input('category'));
                // die; 

        $data =json_decode($response->body());
        $cate= $request->input('category');
        $percentage= $request->input('percentage');
        $fraction = $percentage/100;
         foreach($data as $product){
            $product = (array)$product;
         if(in_array($product['cateId'], $cate)){
            $calc = $product['price']*$fraction;
            $price =round($product['price']+$calc);
            Product::updateOrCreate(
                ['sku'=> $product['tags']],
                [
                'id'=> $product['prodId'],
                'name'=> $product['prodName'],
                'sku'=> $product['tags'],
                'image'=> $product['file_name'],
                'description'=>$product['description'],
                'selling_price'=>$price,
                'slug'=> $product['prodSlug'],
                'status'=> $product['published'],
                'qty'=> $product['qty'],
                'cate_id'=> $product['cateId'],
                'attribute_id'=> $product['att'],
                'attri_value'=> $product['attVal'],
                'package'=> 1,
                'status'=> $product['published'],

            ]);
           }
         }
         
         
         
                 $selectCate=Category::all();
                 foreach($selectCate as $category){
                  $cate= $request->input('category');
                  if(in_array($category['id'], $cate)){
             
                 SelectedCategory::updateOrCreate(
                     ['slug'=> $category['slug']],
                        [
                        'id'=> $category['id'],
                        'parent_id'=> $category['parent_id'],
                        'category_name'=> $category['category_name'],
                         'level'=> $category['level'],
                        'order_level'=> $category['order_level'],
                        'image'=> $category['image'],
                        'slug'=> $category['slug'],
                        'description'=> $category['meta_description'],
                        'status'=> $category['status'],
                        'featured'=> $category['featured'],
                        'meta_title'=> $category['meta_title'],
                        'meta_description'=> $category['meta_description']
                    ]);
                }
            }

        return redirect()->back()->with('status','Products Imported');

    }



public function testOrders($id){

    $order=Order::where('id','=', $id)->first();

  if($order->delivery_status =='Pending'){
    connection($id);
    $update=Order::findOrFail($id);
    $update ->delivery_status ='on hold';
    $update ->update();
    return redirect()->back()->with('status','Data Sent to circle.com.bd');
    }
    elseif($order ->delivery_status =='Complete')
   {

    return redirect()->back()->with('status','Order already been processed');
   }

}


public function Check(){

$array1 = ['1','2','3','4','5'];
$array2 = ['3','4','5'];

$result = array_intersect($array1,$array2);

dd($result);

}




// End of controller class.....................
}



