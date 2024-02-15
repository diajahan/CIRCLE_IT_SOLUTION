@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Logo Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item active">Logo Setup</li>
                    </ol>
                </div>
            </div>
        </div>
  </section>

    <!-- Main content -->
    <section class="content">
        {{-- <div class="container">
            <div class="row"> --}}
        {{-- <div class="col-md-12"> --}}
        <div class="card">
            <div class="card-header bg-white">
    
            </div>
            <!-- /.card-header -->

            <div class="card-body scrollable">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-bordered data_table_logo">
                        <thead>
                            <tr role="row">
                               <th style="width:10%;">SL No.</th>
                               <th style="width:25%;">Logo</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                                <tr role="row">
                                    <td>1</td>
                                    <td>
                                        <img class="logo nav-logo-img" height="40" width="50" style="" src="{{ asset('assets/img/'.$logo->image)}}">
                                        </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn-flat edit-logo"
                                            value="{{ $logo->id }}" data-toggle="modal" data-target="#update-logo">
                                            <i class="fa fa-edit"></i></button>
                                        <br>
                                    </td>
                                    {{-- Toools td End --}}
                                </tr>


                            <!--....Modal -->
                            @include('Backend.layouts.inc.update-logo-modal')

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
//   $('.data_table_logo').DataTable({
//     "scrollX": false,
//     "scrollY": true,
//     "ordering": false,

//   });

$(document).ready(function ($){
    
$(document).on('click','.edit-logo', function () {
var logo_id=$(this).val();

// alert(cate_id);

    $.ajax({
      method: "GET",
      url: "/logo-edit/"+ logo_id,
      success: function (response) {
        // console.log(response);
        $('#hidden_id_logo').val(response.logo.id);


      }
    });

  });



// end of doc..............

 });
    </script>
@endsection
