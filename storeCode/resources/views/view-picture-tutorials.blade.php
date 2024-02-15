@extends('master')
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container-fluid mb-5">
    <div class="row grid-row p-2">
      <p  class="py-5 video-grid-view-p" style="font-weight:bold;">
       <a href="{{url('/')}}">Home</a>&nbsp;/&nbsp;<a href="{{url('/picture-tutorials')}}">picture Tutorials</a>
       </p>
       
        @foreach ($blogs as $blog)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2">
                <a href="{{url('view-blog/'.$blog->id)}}">
                    <div class="card" style="min-height:250px; width:100%;">
                        <div class="card-body ml-2 text-center">
                            <img  class="card-img-top" alt="..." 
                                src="{{asset('assets/img/blog-images/'.$blog->blog_cover_image.'?v=1.1')}}">
                                    <p class="card-title mt-3" style="min-height:40px; font-weight:bold; font-size:13px;">{{$blog->title}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            
            <div class="row mt-5 pagination-row" >
                <div class="col-lg-5 col-md-4 col-sm-3 col-3"></div>
                    <div class="col-lg-4 col-md-4 col-sm-9 col-9 pagination-col">
                        {{ $blogs->onEachSide(3)->links() }}
                    </div>
                <div class="col-lg-3 col-md-4 col-sm-2 col-12"></div>
            </div>            

      </div>
    </div>
</div>
@endsection
