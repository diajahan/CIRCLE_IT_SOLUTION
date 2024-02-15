<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Image;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class BackEndController extends Controller
{
    public function dashboard(){

        return view('Backend.backend-contend');

    }

    public function productList(){

        $products = Product::orderByDesc('id')->get();
        $categories =Category::all();
        return view('Backend.view-products',compact('products','categories'));
    }

    public function addProduct(Request $request){

        $product = new Product();
        if($request->hasFile('cover_image')){
         $file = $request->file('cover_image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/img/gallery/',$filename);
         $product->image = $filename;

        }

        $product -> cate_id= $request ->input('cate_id');
        $product -> name = $request ->input('product_name');
        $product -> slug = $request ->input('slug');
        $product -> description = $request ->input('description');
        $product -> selling_price = $request ->input('selling_price');
        $product -> qty = $request ->input('qty');
       $product -> package = $request ->input('package');
        $product -> sku = $request ->input('sku');
        $product -> status = $request ->input('status');
        $product -> video = $request ->input('video');
        $product -> meta_title = $request ->input('meta_title');
        $product -> meta_keyword = $request ->input('meta_keyword');
        $product -> meta_description = $request ->input('meta_description');
        $product ->save();


        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'.'.$file->getClientOriginalName();
                $request['product_id']=$product->id;
                $request['image']=$imageName;
                $file->move('assets/img/multiple_images/',$imageName);
                Image::create($request->all());

            }
        }

        return redirect()->back()->with('status', 'Product inserted successfully');

 }

   public function editProduct($id){

    $product = Product::findOrFail($id);
    $category =Category::all();
    return view('Backend.edit-product', compact('product','category'));

   }




   public function updateProduct(Request $request, $id){

    $product = Product::find($id);

    if($request->hasFile('image'))
    {
        $path = 'assets/img/gallery/'.$product->image;
        if(File::exists($path))
        {
            File::delete($path);
        }

             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move('assets/img/gallery/',$filename);
             $product->image = $filename;
    }

       $product -> cate_id= $request ->input('category');
       $product -> name = $request ->input('product_name');
       $product -> sku = $request ->input('sku');
       $product -> description = $request ->input('description');
       $product -> selling_price = $request ->input('selling_price');
       $product -> qty = $request ->input('qty');
       $product -> package = $request ->input('package');
       $product -> status = $request ->input('status');
       $product -> sku = $request ->input('sku');
       $product -> slug = $request ->input('slug');
       $product -> video = $request ->input('video');
       $product -> meta_title = $request ->input('meta_title');
       $product -> meta_keyword = $request ->input('meta_keyword');
       $product -> meta_description = $request ->input('meta_description');
       $product ->update();

       if($request->hasFile("images")){
        $files=$request->file("images");
        foreach($files as $file){
            $imageName=time().'.'.$file->getClientOriginalName();
            $request['product_id']=$product->id;
            $request['image']=$imageName;
            $file->move('assets/img/multiple_images/',$imageName);
            Image::create($request->all());

        }
    }
       return redirect('/product-lists')->with('status', 'Product updated successfully');


}

public function deleteProduct($id){
    Product::find($id)->delete();
    return back()->with('status', 'Product Deleted Successfully');
}

public function deleteImage($id){

    $images=Image::findOrFail($id);
    if (File::exists("images/".$images->image)) {
       File::delete("images/".$images->image);
   }

   Image::find($id)->delete();
   return back();

}

public function viewCategory(){
    $category =Category::all();
    return view('Backend.category-list', compact('category'));
}

public function addCategory(Request $request){
    $category = new Category() ;
    if($request->hasFile('cate_image')){
     $file = $request->file('cate_image');
     $ext = $file->getClientOriginalExtension();
     $filename = time().'.'.$ext;
     $file->move('assets/img/category-images/',$filename);
     $category->image = $filename;

    }
    $category -> category_name = $request ->input('cate_name');
    $category ->slug = $request ->input('slug');
    $category -> status = $request ->input('status');
    $category -> trending = $request ->input('trending');
    $category -> description = $request ->input('description');
    $category -> meta_title = $request ->input('meta_title');
    $category -> meta_description = $request ->input('meta_description');
    $category -> meta_keywords = $request ->input('meta_keywords');
    $category ->save();
    return redirect()->back()->with('status', 'Category added successfully');



   }

   public function editCategory($id){
    $category = Category::find($id);
    return response()->json(['status' => 200,'category' => $category]);


}

public function updateCategory(Request $request){

 $cate_id = $request->input('cate_id_hidden');
 $category = Category::find($cate_id);
 $category->category_name = $request ->input('cate_name');
 $category -> status = $request ->input('status');
 $category -> trending = $request ->input('trending');
 $category ->update();
 return redirect()->back()->with('status', 'Category updated successfully');

}

public function editCateDelete($id){

 $Category = Category::find($id);
 return response()->json(['status' => 200,'Category' => $Category]);

}

public function deleteCategory(Request $request){

 $cate_id = $request->input('hidden_cate_id');

 $category=Category::find($cate_id);
 $category->delete();

 return redirect()->back()->with('status', 'Category deleted successfully');


}


public function orderList(){


    $orders=Order::all();

   return view('Backend.view-orders',compact('orders'));

    }


    public function editOrder($id){
     $orders = Order::find($id);
     return response()->json(['status' => 200,'Orders' => $orders ]);
    }

    public function updateOrder(Request $request){

     $order_id = $request->input('order_id_hidden');
     $order = Order::find($order_id);
     $order->id = $request ->input('order_id');
     $order->delivery_date = $request ->input('delivery_date');
     $order->delivery_status = $request ->input('delivery_status');
     $order->remarks = $request ->input('remarks');
     $order->update();

     return redirect()->back()->with('status', 'Order Updated successfully');


    }

    public function viewSingleOrder($id){

     $orders=DB::table('orders as order')
     ->join('order_items  as order_item', 'order_item.order_id', '=', 'order.id')
     ->join('products as product', 'order_item.prod_id', '=', 'product.id')
     ->where('order.id', '=', $id)
     ->get(['order.id',
     'order_item.unit_price',
     'order_item.qty',
     'product.name',
     'product.image'
     ]);

     return view('Backend.view-single-orders',compact('orders'));

    }

    public function editDeleteOrder($id){

        $orders = Order::find($id);
        return response()->json(['status' => 200,'Orders' => $orders ]);

    }


    public function DeleteOrder(Request $request){

        $order_id = $request->input('hidden_order_id');

        // dd($order_id);

        $orders = Order::where('id', $order_id)->first();
        $orders->delete();

        $order_item =OrderItems::where('order_id','=', $order_id)->first();
        $order_item->delete();

        return redirect()->back()->with('status', 'Order deleted successfully');


    }





// end of controller class...............................
}
