@extends('master')
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container-fluid mb-5">
    <div class="row grid-row p-2">
      <p  class="py-5 video-grid-view-p" style=" font-weight:bold;">
       <a href="{{url('/')}}">Home</a>&nbsp;/&nbsp;<a href="{{url('/video-tutorials')}}">Video Tutorials</a>
       </p>
            @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-2 text-center" style="">
                <a href="//{{ $video->video_url }}" class="glightbox btn-watch-video d-flex align-items-center" style="position:relative;">
                <i style="position:absolute; left:45%; font-size:60px;" class="bi bi-play-circle"></i>
                <img id="myImg" src="{{url('assets/img/thumbnail_images/'.$video->thumbnail_image)}}" alt=""
                style="height:100%; width:100%;">
              </a>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="p-2" style="font-size:12px; font-weight:bold;">{{$video->video_title }}</p>
              </div>
            </div>
            @endforeach
            
            <div class="row mt-5 pagination-row" >
                <div class="col-lg-5 col-md-4 col-sm-3"></div>
                    <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">
                        {{ $videos->onEachSide(3)->links() }}
                    </div>
                <div class="col-lg-3 col-md-4 col-sm-2"></div>
            </div>             
            
      </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){

});
</script>
@endsection
