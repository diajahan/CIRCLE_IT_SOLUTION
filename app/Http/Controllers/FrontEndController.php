<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Blog;
use App\Models\Video;
use App\Models\BlogImage;
use App\Models\OrderItems;
use App\Models\BlogContent;
use App\Models\CustomerCraft;
use App\Models\MultipleImage;
use App\Models\CustomersReview;
use App\Models\SelectedCategory;
use App\Models\CustomerCraftImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
// use Session;
use Image;

class FrontEndController extends Controller
{
   public function frontPage(){

    if (!Session::has('guest_user')) {
        $guest_user = 'guest_' . Str::random(10);
        Session::put('guest_user', $guest_user);
        Cookie::queue('guest_user', $guest_user, 1440); // Set a cookie that expires in 24 hours
    } else {
        $guest_user = Session::get('guest_user');
    }

    $products=Product::orderByDesc('id')
    ->where('status','=','1')->get();
    $categories=Category::get();
    return view('frontend-content', compact('products','categories'));
   }


   public function searchProduct(){


    $products =Product::select('name')->get();

    $data = [];

    foreach ($products as $item) {
        $data[] = $item['name'];
    }

    return $data;


}

public function mobileCates(){

    $categories=SelectedCategory::where('status','=','1')->get();
    //  $categorySingle=SelectedCategory::where('status','=','1')->first();
    return view('mobile-categories', compact('categories'));
}

   public function submitSearch(Request $req){

    $search_product = $req->product_name;
    if($search_product != "")
    {
        $products =Product::where("name","LIKE","%$search_product%")
                    ->orWhere("slug","LIKE","%$search_product%")
                    ->orWhere("sku","LIKE","%$search_product%")
                    ->orWhere("selling_price","LIKE","%$search_product%")
                    ->Paginate(30);
        if($products)
        {
            return view('view-searched-product',compact('products'));
        }
        else
        {
            return redirect()->back()->with('error', 'No products matched your search');
        }
    }
    else{
        return redirect()->back();
    }


}

   public function allProducts(){

    $products = Product::orderByDesc('id')->where('status','=','1')->Paginate(52);
        return view('view-all-products', compact('products'));
   }

  public function singleProduct($slug){

    $product=Product::where('slug','=', $slug)->first();
    $related_product = Product::inRandomOrder()
    ->where('cate_id','=',$product->cate_id)
    ->where('slug','!=', $slug)
    ->take(4)
    ->get();
    
    $attributes=json_decode($product->attri_value ,true);
    $images=MultipleImage::where('product_id','=', $product->id)->get();
    return view('view-single-product', compact('product', 'related_product','images','attributes'));
}


public function cateProducts($id){

    $cate = SelectedCategory::findOrFail($id);
    $cateProducts =Product::orderByDesc('id')
    ->where('cate_id','=', $id)->where('status','=','1')->get();
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
            $img = Image::make($file);
            $img->resize(400, 500);
            $img ->save(\public_path('/assets/img/CustomersCraftImage/'.$imageName), 45);
            // $file->move('assets/img/CustomersCraftImage/',$imageName);
            CustomerCraftImage::create($request->all());

        }
    }

}
    return redirect()->back()->with('status','Your Craft has been submited');
}

public function customersFeedback(){

 $reviews=CustomersReview::get();
 return view('customers-feedback',compact('reviews'));
}


public function submitReview(Request $request){

    $validate=$this->validate($request,[
        'name' => 'required',
        'review' => 'required'
   ]);

    if($validate){
            $review = new CustomersReview();
            $review ->name= $request->input('name');
            $review ->email = $request->input('email');

            if($request->hasFile('image')){
             $file = $request->file('image');
             $imageName=time().'.'.$file->getClientOriginalName();
             $img = \Image::make($file);
             $img->resize(200, 200);
            //  $img ->save(\public_path($imageName),35);
             $img ->save(\public_path('/assets/img/CustomerFeedbackImage/'.$imageName), 45);
             $review->image = $imageName;

            }
            $review ->review = $request->input('review');
            $review ->save();
}
    return redirect()->back()->with('status','Your Feedback has been submited');
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
