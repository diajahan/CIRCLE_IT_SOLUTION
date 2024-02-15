@extends('master')
@section('title'){{$cate->category_name}}@endsection
@section('content')
<div class="product-section-view-cate-prod" style="">
    <div class="container-fluid">
        <div class="row grid-row p-2">
            <p style="margin-bottom:3%; font-size:12px;" class="mt-5">
                <a href="{{url('/')}}" >Home&nbsp;/&nbsp;</a>Category&nbsp;/&nbsp;<a href="{{url('view-cate-products/'.$cate->id)}}" style="color:#99244D;">"{{$cate->category_name}}"</a>
            </p>

            @foreach ($cateProducts as $cateProd)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2">
                <a href="{{url('view-single-product/'.$cateProd->slug)}}" class="">
                <div class="card h-100" style="min-height:250px; width:100%; position:relative!important;">
                    <div class="card-body text-center">
                    <img  class="card-img-top" alt="..."
                       loading="lazy" src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$cateProd->image)}}">
                    </div>
                    <p class="text-center" style="font-weight:bold; font-size:20px; color:#99244D; position:absoute!important;buttom:6%!important;">{{$cateProd->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>
                    <p class="text-center" style="font-weight:bold; font-size:13px; position:absoute!important;buttom:5%!important;">{{$cateProd->name}}</p>                    
                 </div>
                </a>
            </div>
          @endforeach
        </div>


    </div>
</div>
@endsection
