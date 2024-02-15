@extends('master')
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container-fluid">
        <div class="row grid-row p-1">
      <p style="margin-bottom:5%; margin-left:2%;">
       <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;/<a href="{{url('/view-products')}}">&nbsp;&nbsp;Products</a>
       </p>
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                <a href="{{url('view-single-product/'.$product->slug)}}" class="">
                <div class="card" style="min-height:250px; width:100%;">
                    <div class="card-body ml-2 text-center">
                     <img  class="card-img-top" alt="..." 
                    src="{{ asset('assets/img/gallery/'.$product->image.'?v=1.2')}}">
                     <p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">{{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p></p>
                      <p class="card-title" style="min-height:55px; font-weight:bold; font-size:13px;">{{$product->name}}</p>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
            
        <div class="row mt-5 pagination-row">
            <div class="col-lg-5 col-md-4 col-sm-3 col-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">
                    {{ $products->onEachSide(3)->links() }}
                </div>
            <div class="col-lg-3 col-md-4 col-sm-2 col-12"></div>
        </div>

      </div>
    </div>
</div>
@endsection
