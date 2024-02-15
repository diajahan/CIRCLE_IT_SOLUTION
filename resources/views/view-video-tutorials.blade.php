@extends('master')
@section('title', 'Video Tutorials')
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container-fluid mb-5">
        <div class="row grid-row p-2">
            <p  class="py-1 video-grid-view-p mt-1" style="margin-bottom:1%; font-size:12px;">
                <a href="{{url('/')}}">Home</a>&nbsp;/&nbsp;<a href="{{url('/video-tutorials')}}" style="color:#99244D;">"Video Tutorials"</a>
            </p>

            <div class="" style="margin-top:1%;">
                <ul class="nav col-12 col-lg-6 text-center" style="margin-bottom:3%;">
            <li style="margin-left:5%!important; font-weight:bold; padding:5px; line-hight:5px; border: 2px solid #DA83A5;"><a href="{{url('/video-tutorials')}}" class="" style="font-size:12px; color:#99244D;">Video Tutorials</a></li>
            <li style="margin-left:1%!important; font-weight:bold; padding:5px; line-hight:5px; border: 2px solid #DA83A5;"><a href="{{url('/picture-tutorials')}}" class="" style="font-size:12px; color:#99244D;">Picture Tutorials</a></li>

                </ul>
                </div>

            @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-2 mt-2 text-center" style="">
                <a href="//{{ $video->video_url }}" class="glightbox btn-watch-video d-flex align-items-center" style="position:relative;">
                <i style="position:absolute; left:45%; font-size:60px;" class="bi bi-play-circle"></i>
                <img id="myImg" loading="lazy" src="{{url('assets/img/thumbnail_images/'.$video->thumbnail_image)}}" alt=""
                style="height:100%; width:100%;">
              </a>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="p-2" style="font-size:12px; font-weight:bold;">{{$video->video_title }}</p>
              </div>
            </div>
            @endforeach
        </div>
          <div class="row mt-5 pagination-row" >
            <div class="col-lg-5 col-md-4 col-sm-3"></div>
                    <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">
                        {{ $videos->onEachSide(3)->links() }}
                    </div>
            <div class="col-lg-3 col-md-4 col-sm-2"></div>
        </div>
    </div>
</div>
@endsection

<!--@section('scripts')-->
<!--<script>-->
<!--$(document).ready(function(){-->

<!--});-->
<!--</script>-->
@endsection
