<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Video;

class VideoTutorialController extends Controller
{


    public function videoTutorials(){


        $video_tutorials=Video::orderByDesc('id')->get();
        return view('Backend.video-tutorials', compact('video_tutorials'));

    }


public function addVideo(Request $request){

        $video = new Video();
        if($request->hasFile('video_thumbnail_image')){
         $file = $request->file('video_thumbnail_image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/img/thumbnail_images/',$filename);
         $video->thumbnail_image= $filename;

        }

        $video ->video_title = $request ->input('video_title');
        $video -> embade_code = $request ->input('embade_code');
        $video -> video_url = $request ->input('video_url');
        $video ->save();

        return redirect()->back()->with('status', 'Video Added Successfully');

    }


    public function editVideoTutorial($id){
        $video=Video::findOrFail($id);
        return response()->json(['status'=>200, 'Video'=>$video]);
    }

    public function updateVideoTutorial(Request $request){

        $id =$request->input('hidden_video_id');

        $tutorial =Video::findOrFail($id);

        if($request->hasFile('image'))
        {
            $path = 'assets/img/thumbnail_images/'.$tutorial->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

                 $file = $request->file('image');
                 $ext = $file->getClientOriginalExtension();
                 $filename = time().'.'.$ext;
                 $file->move('assets/img/thumbnail_images/',$filename);
                 $tutorial->thumbnail_image = $filename;
        }
        $tutorial->video_title =$request->input('video_title');
        $tutorial->embade_code =$request->input('embade_code');
        $tutorial->video_url  =$request->input('video_url');
        $tutorial->product_id =$request->input('prod_id');
        $tutorial->update();

        return redirect()->back()->with('status','Updated successfully');

    }


    public function deleteVideoTutorial($id){
        $video=Video::findOrFail($id);
        $video->delete();
        return redirect()->back()->with('status','Tutorial deleted Successfully');

    }





// End of controller Class
}
