<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\BlogImage;
use Session;

class BlogController extends Controller
{


    public function picturalTutorial($id){

        $blog=Blog::where('id','=',$id)->first();
        $blog_content=BlogContent::where('blog_id','=',$id)->get();
          return view('Blog.view-single-blog',compact('blog_content','blog'));
        }


    public function ballonCraftTutorial(){

        return view('Blog.baloon-craft');

    }


    public function kaktaruyaCraftTutorial(){

        return view('Blog.kaktaruya-craft');
    }


    public function brasletCraftTutorial(){

        return view('Blog.braslet-craft');

    }

    public function viewBlogLists(){

        $blogs=Blog::all();
        return view('Backend.blog-lists',compact('blogs'));

    }

    public function createBlog(){

        return view('Backend.create-blog');

    }

    public function addBlogStep1(Request $request){


        $blog = new Blog();
        if($request->hasFile('blog_cover_image')){
         $file = $request->file('blog_cover_image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/img/blog-images/',$filename);
         $blog->blog_cover_image = $filename;

        }

        $blog ->title= $request ->input('blog_title');
        $blog -> equipments = $request ->input('equipment');
        $blog -> intro = $request ->input('intro');
        $blog ->save();

        return redirect()->back()->with('status', 'Add Blog Content');

    }


    public function getBlogId(){

        // $blog= DB::table('blogs')
        // ->latest()
        // ->first();
        $blog=Blog::orderBy('id', 'DESC')->first();
        return response()->json(['status' => 200,'blog' => $blog]);

    }

    public function addBlogContent(Request $request){

        $content=new BlogContent();
        $content->blog_id=$request->input('blog_id');
        $content->content=$request->input('content');
        $content->save();

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'.'.$file->getClientOriginalName();
                $request['blog_id']=$request->input('blog_id');
                $request['blog_content_id']=$content->id;
                $request['image']=$imageName;
                $file->move('assets/img/blog-images/',$imageName);
                BlogImage::create($request->all());

            }
        }

        return redirect()->back()->with('status', 'Add More Content');

    }

    public function deleteBlog($id){

        $blog=DB::table('blogs')
        ->Join('blog_contents','blogs.id','=','blog_contents.blog_id')
        ->Join('blog_images','blog_images.blog_id', '=','blog_contents.blog_id')
        ->where('blogs.id',$id);
        $blog->delete();
        DB::table('blog_contents')->where('blog_id', $id)->delete();
        DB::table('blog_images')->where('blog_id', $id)->delete();
        return redirect()->back()->with('status','Data deleted successfully');
    }









// End of controller class..........................
}
