@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$prodArttibuts->att_name}}&nbsp;Values</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Product
                        </li>
                        <li class="breadcrumb-item">Attributes</li>
                        <li class="breadcrumb-item active">Values</li>
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
                        <button type="button" class="btn btn-info mb-2" data-toggle="modal"
                            data-target="#add-attribute_value">
                            <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Value</button>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_attributes" data-order='[[ 0, "desc" ]]'>
                            <thead>
                                <tr role="row">
                                    <th style="width:7%;">Values</th>
                                    <th style="width:25%;">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prodArttibuts->attrValues as $attValue)
                                    <tr role="row">
                                        <td>{{$attValue->att_value}}</td>
                                        <td>
                                        <a href="{{url('attribute-value/'.$attValue->product_attribute_id)}}">
                                            <button type="button" class="btn btn-success btn-sm btn-flat" data-toggle="modal"
                                            data-target="#">
                                                <i class="fa fa-edit"></i></button>
                                            <br>
                                        </a>
                                        <form method="POST" action="{{ url('delete/'.$attValue->product_attribute_id) }}">
                                            @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                    <button type="button" class="btn btn-danger btn-sm btn-flat mb-2 show_attri_value_confirm" data-toggle="tooltip">
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
                <!-- /.card -->
                {{-- </div> --}}
                <!-- /.col -->
            {{-- </div> --}}
            <!-- /.row -->
        {{-- </div> --}}
        <!-- /.container-fluid -->

{{-- @include('Backend.layouts.inc.add-arrtibute-value-modal') --}}
{{-- @include('Backend.layouts.inc.update-arrtibute-modal') --}}
</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
     $('.show_attri_value_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: ``,
              text: "You Want To Delete Attribute?",
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

</script>
<script>
   $('.data_table_attributes').DataTable({
    "scrollX": false,
    "scrollY": true,
    "ordering": false,

  });

</script>
@endsection
