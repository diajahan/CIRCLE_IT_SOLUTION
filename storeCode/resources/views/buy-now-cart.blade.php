@extends('master')
@section('content')

<div class="container-fluid py-5 mt-3 p-5" style="margin-top:7%!important; min-height:60vh;">
    <div class="card shadow cartDivReload">
        @if ($item->count() > 0 )
            <div class="card-header bg-white">
                <h1 class="text-center mb-2 text-dark">Your Cart</h1>
            </div>
        <div class="card-body">
            @php $total = 0; @endphp

            <div class="row product_data cart-div-position mb-5" style="margin-left:3%;">
                <div class="col-lg-2 col-md-2 col-sm-4 col-4 ">
                    <img class="" width="100" height="100" src="{{asset('assets/img/gallery/gallery-2.jpeg')}}" alt="Product image">
                </div>
                <div class="col-lg-4 col-md-2 col-sm-4 col-4  my-auto">
                 <p><b style="font-size:25px;">{{$item->products->name}}</b></p>
                </div>{{-- end of col-md-3 --}}

                <div class="col-lg-2 col-md-2 col-sm-4 col-4 my-auto" >
                    <p style="font-size:25px;"><b><b>&#2547;</b>&nbsp;{{$item->products->selling_price}}</b></p>
                   </div>{{-- end of col-md-2 --}}

                <div class="col-lg-2 col-md-4 col-sm-6 col-6" >
                 <div class="row">
                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if($item->products->qty >= $item->prod_qty )
                    <label for="Quantity" class="text-center cart-quantity-lebel" style="font-size:18px;"><b>Quantity</b></label>
                    <div class="input-group mb-3 quantity-div mt-2">
                         <button class="input-group-text changeQuantity decrement-btn">-</button>
                         <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control font-weight-bold text-center qty-input">
                         <button class="input-group-text changeQuantity increment-btn">+</button>
                    </div>
                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                    @else
                     <h6 class="mt-4 text-danger font-weight-bold"><b>Out of stock</b></h6>
                   @endif
                   </div>
                </div>{{-- end of col-md-3 --}}

                <div class="col-lg-2 col-md-2 col-sm-6 col-6 ml-5 divcartRemovebutton" style="margin-top:1%;">

                <button type="button" class="btn btn-danger mt-3 rounded-circle delete-cartItem cartRemovebutton">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                </div>{{-- end of col-md-2 --}}
            </div>{{-- end of row --}}
            {{-- @endforeach --}}
        </div>{{-- end of card-body --}}
        <hr>
        <div class="total-price-div py-3 px-5 mt-3 cart-Proceed-to-checkout-div">
        {{-- <h5 class="mb-5" style="margin-left:20%"><span class=""><b id="total-price">Total Price :</b></span><span><b  id="total-price-value"><b>&#2547;</b>&nbsp;{{$total }}</b>&nbsp;&nbsp;&nbsp;&nbsp;</span></h5> --}}
        <a href="{{url('/view-products')}}" class="btn btn-outline-success float-start mt-2 ">Continue Shopping</a>
        <a href="{{url('/checkout-page')}}" class="btn btn-outline-danger float-end mt-2 cart-Proceed-to-checkout ">Proceed to Checkout </a>
        </h5>
        </div>

        @else
        <div class="card-body text-center mt-3">
         <h2>Your&nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Cart is empty</h2>
         <a href="{{url('/view-products')}}" class="btn btn-outline-success float-right mt-3">Continue Shopping</a>
        </div>
        @endif

    </div>{{-- end of card --}}
</div>{{-- end of container-fluid --}}
@endsection
@section('scripts')
<script>

$(document).ready(function(){

    });

</script>
@endsection
