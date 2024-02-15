<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Image;
use App\Models\OrderItems;
use App\Models\Blog;
use App\Models\Video;
use App\Models\BlogContent;
use App\Models\CustomerCraft;
use App\Models\CustomerCraftImage;
use App\Models\BlogImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class FrontEndController extends Controller
{
   public function frontPage(){

    $products=Product::orderByDesc('id')->where('package','=','1')->where('status','=','1')->get();
    $cate=Category::get();
    return view('frontend-content', compact('products','cate'));
   }

   public function allProducts(){

    $products = Product::orderByDesc('id')->where('status','=','1')->Paginate(20);
        return view('view-all-products', compact('products'));
   }

  public function singleProduct($slug){

    $product=Product::where('slug','=', $slug)->first();
    $related_product = Product::inRandomOrder()
    ->where('cate_id','=',$product->cate_id)
    ->where('slug','!=', $slug)
    ->take(4)
    ->get();
    $images=Image::where('product_id','=', $product->id)->get();
    return view('view-single-product', compact('product', 'related_product','images'));
}


public function cateProducts($id){

    $cate = Category::findOrFail($id);
    $cateProducts =Product::orderByDesc('id')
    ->where('cate_id','=',$id)->where('status','=','1')->paginate(20);
    return view('view-cate-products', compact('cateProducts','cate'));

}


public function videoTutorials(){

 $videos=Video::orderByDesc('id')->paginate(6);
 return view('view-video-tutorials',compact('videos'));
}

public function pictureTutorials(){

    $blogs =Blog::orderByDesc('id')->paginate(6);
    return view('view-picture-tutorials',compact('blogs'));
   }


public function submitYourCraft(){
 return view('submit-your-craft');
}

public function submitCraft(Request $request){

    $validate=$this->validate($request,[
        'images' => 'required',
        'images.*' => 'mimes:jpeg,png,jpg|max:1024'
   ]);

    if($validate){
    $customerCraft = new CustomerCraft();
    $customerCraft ->name= $request->input('name');
    $customerCraft ->address = $request->input('address');
    $customerCraft ->email = $request->input('email');
    $customerCraft ->phone = $request->input('phone');
    $customerCraft ->save();

        if($request->hasFile("images")){
        $files=$request->file("images");
        foreach($files as $file){
            $imageName=time().'.'.$file->getClientOriginalName();
            $request['customer_craft_id'] = $customerCraft->id;
            $request['image']=$imageName;
            $file->move('assets/img/CustomersCraftImage/',$imageName);
            CustomerCraftImage::create($request->all());

        }
    }

}
    return redirect()->back()->with('status','Your Craft has been submited');
}

public function termsAndCondition(){
    return view('terms-and-condtion');
}

public function privacyPolicy(){

    return view('privacy-policy');

}
public function returnPolicy(){

    return view('return-policy');

}




// End of Controller class.................
}
