@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Footer Info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item active">Footer Info</li>
                    </ol>
                </div>
            </div>
        </div>
  </section>

    <!-- Main content -->
    <section class="content">
        {{-- <div class="container-fluid">
            <div class="row"> --}}
        {{-- <div class="col-md-12"> --}}
        <div class="card">
            <div class="card-header bg-white">
    
            </div>
            <!-- /.card-header -->

            <div class="card-body scrollable">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-bordered data_table_footer">
                        <thead>
                            <tr role="row">
                               <th style="width:3%;">House No.</th>
                                <th style="width:15%;">Floor</th>
                                <th style="width:15%;">Road</th>
                                <th style="width:5%;">City</th>
                                <th style="width:5%;">Country</th>
                                <th style="width:10%;">Phone</th>
                                <th style="width:5%;">Email</th>
                                <th style="width:5%;">website</th>
                                <th style="width:7%;">Copy Right By</th>
                                <th style="width:5%;">Update</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr role="row">
                                    <td>{{ $footer->house }}</td>
                                    <td>{{ $footer->floor }}</td>
                                    <td>{{ $footer->road }}</td>
                                    <td>{{$footer->city }}</td>
                                    <td>{{ $footer->country }}</td>
                                    <td>{{ $footer->phone }}</td>
                                    <td>{{ $footer->email }}</td>
                                    <td>{{ $footer->website }}</td>
                                    <td>{{ $footer->copy_right }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn-flat edit-footer-info"
                                            value="{{ $footer->id }}" data-toggle="modal" data-target="#update-footer-info">
                                            <i class="fa fa-edit"></i></button>
                                        <br>
                                    </td>
                                    {{-- Toools td End --}}
                                </tr>


                            <!--....Modal -->
                            @include('Backend.layouts.inc.add-footer-info-modal')

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
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
   $('.data_table_footer').DataTable({
    "scrollX": false,
    "scrollY": true,
    "ordering": false,

  });

        $(document).ready(function ($){

            $(document).on('click','.edit-btn-cate', function () {
            var cate_id=$(this).val();

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
      method: "GET",
      url: "/edit_category/"+ cate_id,
      success: function (response) {
        console.log(response);
        $('#cate_id_hidden').val(response.category.id);
        $('#cate_name').val(response.category.category_name);

      }
    });

  });


$(document).on('click','.edit-footer-info', function () {
var cate_id=$(this).val();

// alert(cate_id);

    $.ajax({
      method: "GET",
      url: "/edit-footer-info/"+ cate_id,
      success: function (response) {
        // console.log(response);
        $('#hidden_id_footer').val(response.Footer.id);
        $('#house').val(response.Footer.house);
        $('#floor').val(response.Footer.floor);
        $('#road').val(response.Footer.road);
        $('#city').val(response.Footer.city);
        $('#country').val(response.Footer.country);
        $('#phone').val(response.Footer.phone);
        $('#email').val(response.Footer.email);
        $('#website').val(response.Footer.website);
        $('#copy_right').val(response.Footer.copy_right);

      }
    });

  });



// end of doc..............

 });
    </script>
@endsection
