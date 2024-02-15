@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item">Orders</li>
                        <li class="breadcrumb-item active">Order List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="card">
                    <div class="card-header bg-white">
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_single-order">
                            <thead>
                                <tr role="row">
                                    <th style="width:5%;">Order Id</th>
                                    <th style="width:10%;">Item</th>
                                    <th style="width:10%;">Name</th>
                                    <th style="width:5%;">Unit Price</th>
                                    <th style="width:5%;">Quantity</th>
                                     <th style="width:10%;">Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id}}</td>
                                        <td>
                                        <img src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$order->image)}}" width="60" height="60">
                                        </td>
                                        <td>{{ $order->name}}</td>
                                        <td>{{ $order->unit_price}}</td>
                                        <td>{{ $order->qty}}</td>
                                       <td style="">
                                           @if($order->prod_size != NULL)
                                           {{$order->prod_size}}
                                           @else
                                            <p>No Size</p>
                                           @endif
                                           &nbsp;</td>
                                        @endforeach

                                    </tr>

                            </tbody>
                        </table>
                </div>
                <div class="row text-right">
                    <table class="table table-bordered mt-2 mb-5" style="width:40%;margin-left:30%;" >
                        @if($data->coupon !='')
                        <tr>
                            <th>Total Amount</th>
                            <td>{{ $data->total_price }}</td>
                        </tr>
                        <tr>
                            <th>Applied Coupon</th>
                            <td>
                               {{$data->coupon}}   =   {{ $coupon->value}}
                               @if($coupon->type == 'Percent')%@endif
                            </td>
                        </tr>
                        @endif

                        <tr>

                            <th>Sub Total</th>
                            @if($data->coupon !='')
                            <td>{{ $data->coupon_applied_amount}}</td>
                            @else
                            <td>{{ $data->total_price }}</td>
                            @endif
                          </tr>
                        <tr>
                          <th>Delivery Charge</th>
                          <td>{{ $data->delivery_charge}}</td>
                        </tr>
                        <tr>
                          <th rowspan="2">Grand Total</th>
                          <td>{{ $data->grand_total}}</td>
                        </tr>
                      </table>

                </div>
                    <!-- /.card-body -->
            </div>
</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
   $('.data_table_single-order').DataTable({
    "scrollX": false,
    "scrollY": false,

  });
</script>
@endsection
