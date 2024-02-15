@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item">Products</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="card">
                    <div class="card-header bg-white">
                     {{-- <a href="{{url('/post-api-product')}}"> --}}
                        <button type="button" class="btn btn-primary mb-2 btn-sm btn-flat" data-toggle="modal"
                        data-target="#mod_id">
                        <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Import Product</button>

                        <a href="{{url('/post-api-category')}}">
                            <button type="button" class="btn btn-success btn-sm btn-flat mb-2" data-toggle="modal"
                            data-target="#">
                            <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Import Categories</button>
                        </a>
                         <!--<a href="#">-->
                            <button type="button" class="btn btn-danger btn-sm btn-flat mb-2 text-white"  id="deleteAllSelectedRecord">
                            <i class="fa fa-trash text-white"></i>&nbsp;&nbsp;
                            Delete All Selected</button>
                        <!--</a>-->
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_product" data-order='[[ 0, "desc" ]]'>
                            <thead>
                                <tr role="row">
                                    <th style="width:5%;"><input type="checkbox" id="select_all_ids" name=""/></th>
                                    <th style="width:5%;">Id</th>
                                    <th style="width:32%;">Name</th>
                                    <th style="width:7%;">Image</th>
                                    <th style="width:5%;">SKU</th>
                                    <th style="width:5%;">Price</th>
                                    <th style="width:5%;">Quantity</th>
                                    <th style="width:5%;">Status</th>
                                    <th style="width:5%;">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                   $sl=1;
                                @endphp
                                @foreach ($products as $product)
                                    <tr id="product_ids{{$product->id}}" role="row" >
                                        <td style="width:5%;"><input type="checkbox" class="checkbox_ids" name="ids" value="{{$product->id}}"/></td>
                                        <td>{{ $product->id}}</td>
                                        <td>{{ $product->name}}</td>
                                        <td>
                                        <img src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$product->image)}}" width="60" height="60">

                                        </td>
                                        <td>{{ $product->sku}}</td>
                                        <td>{{ $product->selling_price}}</td>
                                        <td>
                                            @if($product->qty > 0)
                                            {{ $product->qty}}
                                            @else
                                            <b class="badge bg-danger mt-3 mb-2">Out of stock</b>
                                            @endif
                                        </td>
                                        <td>{{ $product->status}}</td>
                                        {{-- Toools td starts --}}
                                        <td>
                                        {{-- <a href="{{url('edit-product/'.$product->id)}}"> --}}
                                            <button type="button" class="btn btn-success btn-sm btn-flat update-price" data-toggle="modal"
                                            data-target="#add-product" value="{{$product->id}}">
                                                <i class="fa fa-edit"></i></button>
                                            <br>
                                        {{-- </a> --}}
                                        <form method="POST" action="{{ url('delete/'.$product->id) }}">
                                            @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                          <button type="button" class="btn btn-danger btn-sm btn-flat mb-2 show_confirm" data-toggle="tooltip">
                                         <i class="fa fa-trash"></i>&nbsp;&nbsp;</button>
                                        </form>
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


@include('Backend.layouts.inc.add-product-modal')
@include('Backend.layouts.inc.imp-product-modal')



</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
     jQuery('.show_confirm').click(function(event) {
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


//...........................................................................................................
//...........................................................................................................

jQuery('.data_table_product').DataTable({
    "scrollX": false,
    "scrollY": true,
    "ordering": false,

  });

//...........................................................................................................
//...........................................................................................................
jQuery(document).on('click','.update-price', function () {

var prod_id =$(this).val();

// alert(prod_id);

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
      method: "GET",
      url: "edit-product/"+ prod_id,
      success: function (response) {
        // console.log(response);
        $('#prod_id').val(response.product.id);
        $('#new_price').val(response.product.selling_price);

      }
    });

  });


  $('search-select-box select').selectpicker();

});

$(function(e){
    
    $("#select_all_ids").click(function(){
        $('.checkbox_ids').prop('checked',$(this).prop('checked'));
        
    });
    
    $('#deleteAllSelectedRecord').click(function(e){
        e.preventDefault();
        var all_ids=[];
		$('input:checkbox[name=ids]:checked').each(function(){
		   all_ids.push($(this).val());
		});
		
			$.ajax({
    			url:"{{ route('delete.selected') }}",
    			type:"DELETE",
    			data:{
				ids:all_ids,
				_token:'{{ csrf_token() }}'
			},
			success:function(response){
			  $.each(all_ids,function(key,val){
			   $('#product_ids'+val).remove();
			  });
			  location.reload();
			 swal("",response.status,"success");
			}
       });
   });    
   
});
</script>
@endsection
