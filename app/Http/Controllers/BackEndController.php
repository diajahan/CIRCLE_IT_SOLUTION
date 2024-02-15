<?php

namespace App\Http\Controllers;
use Image;
use Session;
use Analytics;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Logo;
use App\Models\Coupon;
use App\Models\Footer;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItems;
use App\Models\SelectedCategory;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use App\Models\AttributeValue;
use App\Models\MultipleImage;
use App\Libraries\GoogleAnalytics;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BackEndController extends Controller
{
    public function dashboard(){
        return view('Backend.backend-contend');

}

    public function productList(){

        $products = Product::orderByDesc('id')->get();
        $categories =Category::all();
        $attributes = ProductAttribute::get();
        return view('Backend.view-products',compact('products','categories','attributes'));
    }

    public function addProduct(Request $request){

        $product = new Product();
        if($request->hasFile('cover_image')){
         $file = $request->file('cover_image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $img = Image::make($file);
         $img->resize(500, 500);
         $img ->save(\public_path('/assets/img/gallery/'.$filename), 45);
        //  $file->move('assets/img/gallery/',$filename);
         $product->image = $filename;

        }

        $product -> cate_id= $request ->input('cate_id');
        $product -> name = $request ->input('product_name');
        $product -> attribute_id = $request ->input('attr_id');
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
                $img = Image::make($file);
                $img->resize(500, 500);
                $img ->save(\public_path('/assets/img/multiple_images/'.$imageName), 45);
                // $file->move('assets/img/multiple_images/',$imageName);
                MultipleImage::create($request->all());

            }
        }

        return redirect()->back()->with('status', 'Product inserted successfully');

 }

   public function editProduct($id){

    $product = Product::findOrFail($id);
    return response()->json(['status' => 200,'product' => $product]);

   }




   public function updateProduct(Request $request){
    $id= $request->input('prod_id');
    $product = Product::findOrFail($id);
    $product -> selling_price = $request ->input('new_price');
    $product ->update();

    return redirect('/product-lists')->with('status', 'Price updated successfully');


}

public function deleteProduct($id){
    Product::find($id)->delete();
    return back()->with('status', 'Product Deleted Successfully');
}

public function deleteImage($id){

    $images=MultipleImage::findOrFail($id);
    if (File::exists("images/".$images->image)) {
       File::delete("images/".$images->image);
   }

   MultipleImage::find($id)->delete();
   return back();

}
// ..........
public function deleteSelected(Request $request){
    
    $ids=$request->ids;
    Product::whereIn('id', $ids)->delete();
    return response()->json(['status' =>'Deleted Selected Products']);

    
}

public function viewCategory(){
    $category =SelectedCategory::all();
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
    $category = SelectedCategory::find($id);
    return response()->json(['status' => 200,'category' => $category]);

}

public function updateCategory(Request $request){

 $cate_id = $request->input('cate_id_hidden');
 $category = SelectedCategory::find($cate_id);
 $category->parent_id = $request ->input('parent');
  $category->level = $request ->input('level');
 $category -> status = $request ->input('status');
 $category ->update();
 return redirect()->back()->with('status', 'Category updated successfully');

}

public function editCateDelete($id){

 $Category = SelectedCategory::find($id);
 return response()->json(['status' => 200,'Category' => $Category]);

}

public function deleteCategory(Request $request){

 $cate_id = $request->input('hidden_cate_id');
 $category=SelectedCategory::find($cate_id);
 $category->delete();

 return redirect()->back()->with('status', 'Category deleted successfully');
}


public function orderList(){

    $orders=Order::orderByDesc('id')->where('total_price','!=','')->get();
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
     'order_item.prod_size',
     'order_item.delivery_charge',
     'product.name',
     'product.image'
     ]);

     $data = Order::where('id','=',$id)->first();

     $coupon = Coupon::where('code','=', $data->coupon)->first();

     return view('Backend.view-single-orders',compact('orders','data','coupon'));

    }

    public function editDeleteOrder($id){

        $orders = Order::find($id);
        return response()->json(['status' => 200, 'Orders' => $orders ]);

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
    // Product Attributes...........................

public function productAttributs(){


    $attributes = ProductAttribute::get();
    return view('Backend.products-attributes', compact('attributes'));

}

public function addAttribute(Request $request){

    $attribute = new ProductAttribute();
    $attribute->att_name =$request->input('attribute_name');
    $attribute->save();
    return redirect()->back()->with('status', 'Attribute Created Successfully');
}

public function attributeValues($id){
    $prodArttibuts=ProductAttribute::where('id','=', $id)->first();
    return view('Backend.attributes-values', compact('prodArttibuts'));

}

public function footerInfo(){
    
     $footer=Footer::where('id','1')->first();
    
    return view('Backend.add-footer-info', compact('footer'));
    
}

public function editFooterInfo($id){
    $footer=Footer::find($id);
    return response()->json(['status'=>'Ok', 'Footer' => $footer ]);
}

public function updateFooterInfo(Request $request){
     $id = $request->input('hidden_id_footer');
     $info = Footer::find($id);
     $info->house = $request ->input('house');
     $info->floor = $request ->input('floor');
     $info->road = $request ->input('road');
     $info->city = $request ->input('city');
     $info->country = $request ->input('country');
     $info->phone = $request ->input('phone');
     $info->email = $request ->input('email');
     $info->website = $request ->input('website');
     $info->copy_right = $request ->input('copy_right');
     $info->update();

     return redirect()->back()->with('status', 'Footer Updated successfully');

    
}


public function logoInfo(){
    
    
   $logo=Logo::where('id','1')->first();    
  return view('Backend.logo-setup', compact('logo'));
}


public function editLogo($id){
    
   $logo=Logo::find($id);
   return response()->json(['status'=>'Ok', 'logo' => $logo]);
}

public function updateLogo(Request $request){
    
    $id = $request->input('hidden_id_logo');
    
    $table = Logo::find($id);
  
  
//   dd($id);
    if($request->hasFile('logo'))
    {
        $path = 'assets/img/'.$table->image;
        if(File::exists($path))
        {
            File::delete($path);
        }

             $file = $request->file('logo');
             $ext = $file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move('assets/img/',$filename);
             $table->image = $filename;
    }
    
        $table ->update();
 
    return redirect()->back()->with('status', 'Logo updated successfully');
}
    

    



    

// end of controller class...............................
}
