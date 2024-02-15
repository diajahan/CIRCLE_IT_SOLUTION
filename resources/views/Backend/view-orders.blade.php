@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
        {{-- <div class="container-fluid">
            <div class="row"> --}}
                {{-- <div class="col-md-12"> --}}
                <div class="card">
                    <div class="card-header bg-white">
                        <h3>Orders List</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_orders" data-order='[[ 0, "desc" ]]'>
                            <thead>
                                <tr role="row">
                                    <th style="width:3%;">Id</th>
                                    <th style="width:7%;">Name</th>
                                    <th style="width:5%;">Phone</th>
                                    <th style="width:5%;">Address</th>
                                    <th style="width:5%;">Delivery Status</th>
                                    <th style="width:5%;">Delivery Charge</th>
                                    <th style="width:3%;">Total</th>
                                    <th style="width:10%;">Order Date</th>
                                    <th style="width:3%;">remarks</th>
                                    <th style="width:3%;">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr role="row">
                                        <td>{{ $order->id}}</td>
                                        <td>{{ $order->customer_name}}</td>
                                        <td>{{ $order->phone}}</td>
                                        <td>{{ $order->shipping_address}}</td>
                                        <td>
                                            @if($order->delivery_status == 'Complete')
                                            <b class="text-success">{{ $order->delivery_status}}</b>
                                            @elseif($order->delivery_status == 'Pending')
                                            <b class="text-danger">{{ $order->delivery_status}}</b>
                                            @elseif($order->delivery_status == 'on hold')
                                            <b class="text-success">Sent</b>
                                             @elseif($order->delivery_status == 'Processing')
                                            <b class="text-warning">{{ $order->delivery_status}}</b>
                                             @elseif($order->delivery_status == 'Cancel')
                                             <b class="text-dark bg-warning p-1">{{ $order->delivery_status}}</b>
                                              @elseif($order->delivery_status == 'Return')
                                             <b class="text-praimary">{{ $order->delivery_status}}</b>
                                            @endif
                                        </td>
                                        <td>{{ $order->delivery_charge}}</td>
                                        <td>{{ $order->grand_total}}</td>
                                        <td>{{ $order->created_at}}</td>
                                        
                                        <td>
                                        {{ $order->remarks}}
                                        @if($order->delivery_status == 'on hold')        
                                           <b class="">Order Sent to circle</b>
                                        @endif    
                                        </td>
                                        {{-- Toools td starts --}}
                                        <td>

                                            <button type="button" class="btn btn-success btn-sm btn-flat edit-btn-order" data-toggle="modal"
                                            data-target="#updateorders" value="{{$order->id}}">
                                                <i class="fa fa-edit"></i></button>
                                            <br>
                                       <a href="{{url('view-single-order/'.$order->id)}}" target="_blank">
                                        <button type="button" class="btn btn-warning btn-sm btn-flat edit-btn-order" data-toggle="modal"
                                         data-target="#" value="{{$order->id}}">
                                          <i class="fa fa-eye"></i></button>
                                          <br>
                                        </a>
                                          <button type="button" class="btn btn-danger btn-sm btn-flat edit-delete-order" data-toggle="modal"
                                          data-target="#deleteOrder" value="{{$order->id}}">
                                              <i class="fa fa-trash"></i></button>
                                          <br>
                                        @if($order->delivery_status == 'Pending')
                                          <a href="{{url('send-order/'.$order->id)}}">
                                            <button type="button" class="btn btn-primary btn-sm btn-flat " data-toggle="modal"
                                             data-target="#" value="{{$order->id}}">
                                              <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </i></button>
                                              <br>
                                            </a>
                                        @endif

                                        </td>
                                        {{-- Toools td End --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </div>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{-- </div> --}}
                <!-- /.col -->
            {{-- </div> --}}
            <!-- /.row -->
        {{-- </div> --}}
        <!-- /.container-fluid -->

@include('Backend.layouts.inc.update-orders-modal')
@include('Backend.layouts.inc.delete-order-modal')
</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
   $('.data_table_orders').DataTable({
    "scrollX": false,
    "scrollY": true,
    "ordering": false,

  });

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: ``,
              text: "You Want To Delete Product?",
              icon: "warning",
              width: "200px",
              height:"120px",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

// edit Order............................................................................
$(document).on('click','.edit-btn-order', function () {

var order_id =$(this).val();

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
      method: "GET",
      url: "/edit_order/"+ order_id,
      success: function (response) {
        // console.log(response);
        $('#order_id_hidden').val(response.Orders.id);
        $('#order_id').val(response.Orders.id);
        $('#delivery_date').val(response.Orders.delivery_date);
        $('#delivery_status').val(response.Orders.delivery_status);
        $('#remarks').val(response.Orders.remarks);

      }
    });

  });


  // delete Order............................................................................
$(document).on('click','.edit-delete-order', function () {

var order_id =$(this).val();

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
      method: "GET",
      url: "/edit_delete_order/"+ order_id,
      success: function (response) {
        // console.log(response);
        $('#hidden_order_id').val(response.Orders.id);
        $('h4#order_id').html(response.Orders.id);

      }
    });

  });

</script>
@endsection
