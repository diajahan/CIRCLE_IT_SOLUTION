@extends('master')
@section('title', 'Checkout')
@section('content')
<section class="padding-top checkout-section">
    <div class="container-fluid p-5">
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="card pb-5 pl-2">
                    <div class="card-body">

                     <form action="{{ url('/place-order') }}" method="POST" class="form" id="order_form" >
                            @csrf
                            <h5 class=" text-uppercase" style="font-weight:bold;">
                                Billing details
                            </h5>
                            <hr class="mt-2">
                            <div class="row checkout-form px-4">
                                <div class="col-sm-12 form-group">
                                    <label class="col-form-label" for="">Your Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="customer_name" id="customer_name"
                                        class="form-control form-control-sm customer_name rounded-0" value="" required >
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label class="col-form-label" for="phone number">Phone Number<span
                                            class="text-danger">*</span></span></label>
                                    <input type="text" name="phone" class="form-control form-control-sm phone rounded-0"
                                        value=""  id="phone" required>
                                    <span id="phone_error" class="text-danger"></span>
                                </div>

                                <div class="col-sm-12 form-group">
                                    <label class="col-form-label" for="state">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="shipping_address" id="shipping_address"
                                        class="form-control form-control-sm shipping_address mb-3 rounded-0" value="" required>
                                </div>

                                <div class="col-sm-12 form-group">
                            <label class="col-form-label" for="state">Delivery Charge<span
                                            class="text-danger">*</span></label>
                                    <select name="delivery_charge" class="form-select rounded-0 leave_response" required>
                                        <option value="" selected>Select Delivery Charge </option>
                                        <option value="60">Inside Dhaka</option>
                                        <option value="120">Outside Dhaka</option>
                                      </select>
                                      {{-- <div class="invalid-feedback">Example invalid select feedback</div> --}}
                                </div>


<div class="d-grid mt-5">
  <button type="submit" class="btn btn-primary btn-block rounded-0" style="background:#FA7021!important; border:0;">Place Your Order</button>
</div>
                            </div>
                    </div>
                </div>
            </div>{{-- end ofol-lg-6 col-sm-12 1st --}}
            <div class="col-lg-6 col-sm-12 mr-5 pr-5">
                <div class="card py-3">
                    <div class="card-body">
                        <h6 class="mt-2 text-uppercase" style="font-weight:bold;">Your Order Details
                        </h6>
                        <hr class="mt-2">
                        <div class="side-table">

                            <div class="mb-5">
                                <table class="table table-striped mt-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Qty</th>
                                            @foreach($cartitems as $item)
                                            @if($item->prod_size !='')
                                            <th>Size</th>
                                            @endif
                                            @endforeach
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                        @endphp
                                        @foreach($cartitems as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                            <td>
                                                <img src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$item->products->image)}}" alt="imain-image"

                                                style="height:50px; width:50px; border:#E62E04 2px solid;">
                                            </td>
                                            <td>
                                                @if($item->products->qty >= $item->prod_qty )
                                                {{$item->prod_qty}}
                                                @else
                                                    <b class="text-danger">Out of Stock</b>

                                                @endif
                                            </td>
                                            @if($item->prod_size !='')
                                            <td><b class="">{{$item->prod_size}}</b><br></td>
                                            <input type="hidden" value="{{$item->prod_size}}" name="prod_size_hidden" id="prod_size_hidden">
                                            @endif
                                            {{-- <td><span><b id="taka">&#2547;</b></span>&nbsp;{{$item->products->selling_price}}</td> --}}
                                            <td><strong  style="font-size:20px;"><b id="taka">&#2547;</b>&nbsp;<span>{{$item->products->selling_price}}</span></strong></td>

                                        </tr>
                                        @php
                                        $total += $item->products->selling_price * $item->prod_qty ;
                                        @endphp
                                        @endforeach

                                        <tr>
                                            <td><b>SubTotal:</b></td>
                                            <td></td>
                                            <td></td>
                                            @if($item->prod_size !='')
                                            <td></td>
                                            @endif
                                            <td>
                                            <b style="color:#E62E04; font-size:20px;"><b id="taka">&#2547;</b>&nbsp;{{$total}}</b>
                                                <input type="hidden" value="{{$total}}" name="total_hidden" id="total_hidden">
                                            </td>
                                        </tr>

                                        <tr id="coupon-tr" style="display:none;" class="alert alert-danger">
                                            <td><b class="text-danger">Coupon Applied:</b></td>
                                            <td></td>
                                            <td></td>
                                            @if($item->prod_size !='')
                                            <td></td>
                                            @endif
                                            <td>&nbsp;
                                            <b style="color:#E62E04; font-size:20px;" id="discount">&#2547;&nbsp;</b>
                                                <input type="hidden" value="0" name="coupon_total_hidden" id="coupon_total_hidden">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Delivery Charge:</td>
                                            <td></td>
                                            <td>
                                            </td>
                                            @if($item->prod_size !='')
                                            <td></td>
                                            @endif
                                            <td>
                                               <strong style="color:#E62E04; font-size:20px;"><b id="taka" style="display:none;">&#2547;</b><span id="delivery_charge_span"></span></strong>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><b class="checkout-font-size">Grand Total:</b></td>
                                            <td></td>
                                            <td>
                                            </td>
                                            @if($item->prod_size !='')
                                            <td></td>
                                            @endif
                                            <td>
                                               <strong  style="color:#E62E04; font-size:20px;"><b id="taka">&#2547;</b>&nbsp;<span id="grand_total_id">{{$total}}</span></strong>
                                            </td>
                                        </tr>
                                        <input  type="hidden" name="delivery_charge_hidden" id="delivery_charge_hidden">
                                    </tbody>
                                </table>

                            </div>

                       <div class="apply-coupon_div">
                            <div class="form-group">
                                <label for="coupon_code">Coupon Code</label>
                                <input type="text" name="coupon_code" id="coupon_code" class="form-control" value="">
                                <input type="hidden" name="coupon_code_hidden" id="coupon_code_hidden" class="form-control" >
                            </div>
                            <a type=""  id="apply_coupon_button" class="btn btn-warning mt-3 rounded-0 text-white"
                                style="background:#FA7021!important; border:0;">Apply Coupon</a>&nbsp;&nbsp;&nbsp;
                                <small class="text-danger mt-3 ml-5" id="coupon_code_err"></small>
                        </div>


                        </div>
                    </div>
                </div>
                <div class="row mb-2 ml-5">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 ml-5">
                    <a href="{{url('/view-products')}}" class="btn btn-outline-warning mt-3 " style="border-radius:0; font-weight:bold;">Go Back To Shop</a>
                    <a href="{{url('/view-cart')}}" class="btn btn-outline-success  mt-3" style="border-radius:0; font-weight:bold;">Go Back To Cart</a>&nbsp;&nbsp;
                </div>
            </div>

        </div> {{-- end of row under 1st row --}}

        <div class="row" style="margin-top:4%; margin-bottom:10%;">

            <!--<div class="d-grid gap-2 col-6 mx-auto">-->
            <!--    <button class="btn btn-primary rounded-0" type="submit" style="background:#E62E04!important; border:0;" -->
            <!--    >Place Your Order</button>-->
            <!--  </div>-->

        </div>

    </form> <!-- form end.// -->
        </div>
   </div> <!-- container end.// -->
</section>
@endsection
@section('scripts')
<script>
        $(document).ready(function(){
        $('input#delivery_charge_hidden').val(0);
        $('input#coupon_total_hidden').val(0)
        $('.leave_response').on('change', function() {
        var delivery_charge = $(this).val();
        var total=parseInt($('input#total_hidden').val());
        var coupon_total_hidden=parseInt($('input#coupon_total_hidden').val());
        var  grand_total = total + parseInt(delivery_charge)+coupon_total_hidden;
        $('span#grand_total_id').html('');
        $('span#grand_total_id').html(grand_total);
        $('input#grand_total_hidden').val(grand_total);
        $('#delivery_charge_span').html();
        $('#delivery_charge_span').html(delivery_charge);
        $('input#delivery_charge_hidden').val(delivery_charge);
        $('b#taka').show();
        // grand_total_id

    });

  });
</script>
@endsection

