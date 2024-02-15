@extends('master')
@section('title', 'Searched Products')
@section('content')
<div class="product-section" style="margin-top:8%;">
    <div class="container-fluid" style="min-height:70vh;">
        <div class="row grid-row p-2">
            <p style="margin-bottom:3%; font-size:12px;" class="mt-3">
                <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;/<a href="#" style="color:#99244D;">&nbsp;&nbsp;"Search Result"</a>
            </p>

             @if($products->count() > 0 )
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                <a href="{{url('view-single-product/'.$product->slug)}}" class="">
                <div class="card h-100" style="min-height:250px; width:100%; position:relative!important;">
                    <div class="card-body ml-2 text-center">
                     <img  class="card-img-top" alt="..."
                     src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$product->image)}}">

                     <!--<p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">{{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p></p>-->
                     <!-- <p class="card-title" style="min-height:55px; font-weight:bold; font-size:13px;">{{$product->name}}</p>-->
                    </div>
                    <p class="text-center" style="font-weight:bold; font-size:20px; color:#99244D; position:absoute!important;buttom:6%!important;">{{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>
                    <p class="text-center" style="font-weight:bold; font-size:13px; position:absoute!important;buttom:5%!important;">{{$product->name}}</p>
                  </div>
                </a>
            </div>
            @endforeach
            @else
            <h4 style="color:#99244D; margin-bottom:3%; margin-left:40%; margin-top:3%;">No Search Result Found</h4>
            @endif
        </div>

        <!--<div class="row mt-5 pagination-row" >-->
        <!--    <div class="col-lg-5 col-md-4 col-sm-3"></div>-->
        <!--        <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">-->
        <!--            {{ $products->onEachSide(3)->links() }}-->
        <!--        </div>-->
        <!--    <div class="col-lg-3 col-md-4 col-sm-2 col-12"></div>-->
        <!--</div>-->
    </div>
</div>
@endsection
