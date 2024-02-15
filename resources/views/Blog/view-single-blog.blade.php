@extends('master')
@section('title'){{$blog->title}}@endsection
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container mb-5">
    <div class="row p-5" style="">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
     <h2 class="ml-5 text-center text-dark py-2" style="">{{$blog->title}}</h2>
    <p class="py-4">{{$blog['intro']}}</p>
    <strong class="py-4 mt-4">যা যা লাগবে </strong>
        {!! $blog->equipments!!}
        <div class="ml-5 text-center blog-page-multi-image py-4">
        {{-- <img src="{{asset('assets/img/blog-images/'.$blog->blog_cover_image)}}" alt=""> --}}
        </div>
    <strong class="py-4">যেভাবে তৈরি করবে</strong>
    @foreach ($blog_content as $blog_cont)
        <p class="mt-3">
            {!! $blog_cont->content !!}
        </p>
        <div class="ml-5 text-center blog-page-multi-image">
            @foreach ($blog_cont->blogImages as $image)
            <img
            src="{{asset('assets/img/blog-images/'.$image->image.'?v=1.1')}}" alt="" class="mt-5 mb-5">
            @endforeach
        </div>
        @endforeach
     </div>
  </div>
</div>
</div>
@endsection
