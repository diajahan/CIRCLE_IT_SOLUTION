@extends('master')
@section('content')

<div class="container-fluid py-5 mt-3 p-3 cartPageContainer" style="">
    <div class="card shadow cartDivReload">
        @if ($cartitems->count() > 0 )
            <div class="card-header bg-white">
                <h3 class="text-center mb-2 text-dark">Your Cart</h3>
            </div>
        <div class="card-body">
            @php $total = 0; @endphp
            @foreach ($cartitems as $item)

            <div class="row product_data cart-div-position mb-5" style="margin-left:3%;">
                <p class="cart-product-name-mobile" style="display:none; font-size:12px; font-weight:bold;">{{$item->products->name}}</p>
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <img class="cart-image"  style="border:1px solid;" src="{{asset('assets/img/gallery/'.$item->products->image)}}" alt="Product image">
                </div>
                <div class="col-lg-4 col-md-2 col-sm-4 col-4  my-auto cart-product-name-mobile-div">
                 <p class="cart-font cart-product-name-desktop" style="font-size:14px; font-weight:bold;">{{$item->products->name}}</p>

                </div>{{-- end of col-md-3 --}}

                <div class="col-lg-2 col-md-2 col-sm-4 col-4 my-auto cart-product-price-mobile-div" >
                    <p class="cart-font" style="font-size:18px;font-weight:bold;">&#2547;&nbsp;{{$item->products->selling_price}}</p>
                   </div>{{-- end of col-md-2 --}}

                <div class="col-lg-2 col-md-4 col-sm-6 col-6" >
                 <div class="row quantity-div-row">
                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if($item->products->qty >= $item->prod_qty )
                    <label for="Quantity" class="text-center cart-quantity-lebel" style="font-size:16px;"><b>Quantity</b></label>
                    {{-- <div class="input-group mb-3 quantity-div mt-2">
                         <button class="input-group-text changeQuantity decrement-btn">-</button>
                         <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control font-weight-bold text-center qty-input"> --}}
                         {{-- <button class="input-group-text changeQuantity increment-btn">+</button> --}}
                         {{-- <button class="input-group-text increment-btn p-3 changeQuantity style="border-radius:0!important;">+</button>
                    </div> --}}

                    <div class="input-group text-center mb-3 mt-2 " >
                        <button class="input-group-text decrement-btn changeQuantity
                        "
                            style="border-radius:0!important;">-</button>
                        <input type="text" name="quantity" value="{{$item->prod_qty}}"
                            class="form-control font-weight-bold text-center qty-input">
                        <button class="input-group-text increment-btn changeQuantity
                        "
                            style="border-radius:0!important;">+</button>
                    </div>
                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                    @else
                     <h6 class="mt-4 text-danger font-weight-bold"><b>Out of stock</b></h6>
                   @endif
                   </div>
                </div>{{-- end of col-md-3 --}}

                <div class="col-lg-2 col-md-2 col-sm-6 col-6  mt-3 divcartRemovebutton" style="">

                <button type="button" class="btn btn-danger mt-3 rounded-circle delete-cartItem cartRemovebutton">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                </div>{{-- end of col-md-2 --}}
            </div>{{-- end of row --}}
            @endforeach
        </div>{{-- end of card-body --}}
        <hr>
        <div class="total-price-div py-2 px-5 mt- cart-Proceed-to-checkout-div">
        {{-- <h5 class="mb-5" style="margin-left:20%"><span class=""><b id="total-price">Total Price :</b></span><span><b  id="total-price-value"><b>&#2547;</b>&nbsp;{{$total }}</b>&nbsp;&nbsp;&nbsp;&nbsp;</span></h5> --}}
        <a href="{{url('/view-products')}}" class="btn btn-outline-success float-start mt-2 ">Go Back To Shop</a>
        <a href="{{url('/checkout-page')}}" class="btn btn-outline-danger float-end mt-2 cart-Proceed-to-checkout">Proceed to Checkout </a>
        </h5>
        </div>

        @else
        <div class="card-body text-center mt-1">
         <h3 style="font-weight:bold;" class="col-12">Your&nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Cart is empty</h3>
         <a href="{{url('/view-products')}}" class="btn btn-outline-success float-right mt-3 col-12" style="font-weight:bold;">Go Back To Shop</a>
        </div>
        @endif

    </div>{{-- end of card --}}
</div>{{-- end of container-fluid --}}
@endsection
@section('scripts')

<script>
</script>
@endsection
