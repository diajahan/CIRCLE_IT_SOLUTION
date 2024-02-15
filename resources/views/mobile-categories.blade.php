@extends('master')
@section('title', 'Categories')
@section('content')
<div class="product-section" style="min-height:1200px; margin-top:25%; margin-bottom:25%;">
    <div class="container-fluid">
        <div class="row grid-row p-2">
            <p style="margin-bottom:3%; font-size:12px;" class="mt-5">
                <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;/<a href="{{url('/view-products')}}" style="color:#99244D;">&nbsp;&nbsp;"Categories"</a>
             </p>
             
        <div class="col-lg-10 col-md-10 col-sm-12 col-12 mb-2" style="min-height:1000px;">
            @foreach ($categories as $categ)
            <div class="col-lg-10 col-md-10 col-sm-12 col-12 mt-5 mb-5">
                @if($categ->level==0)
                <a href="{{url('cate-products/'.$categ->id)}}"><li class="" style="line-height:12%; font-weight: bolder; font-size:12px; color:#99244D; list-style: none;">{{$categ->category_name}}</li></a>
                @endif 
    			@foreach($categ->childrenSelected as $cate)
    		    @if($cate->level== 1)
                 <a href="{{url('cate-products/'.$cate->id)}}"><li class="mt-4" style="margin-left:8%; line-height:12%; font-weight: bolder; font-size:12px; color:#99244D; 
                 ">{{$cate->category_name}}</li></a>
                 
                 @endif
                 @foreach($cate->childrenSelected as $c)
                 @if($c->level== 2)
                 <a href="{{url('cate-products/'.$c->id)}}"><li class="mt-4" style="margin-left:12%; line-height:12%; font-weight: bolder; font-size:12px; 
                 color:#99244D;">{{$c->category_name}}</li></a>
                 @endif
    			@endforeach
    			@endforeach
            </div>
           @endforeach
         <hr>
      </div>

    </div>
</div>
@endsection
