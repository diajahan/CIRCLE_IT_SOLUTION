@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Video Tutorials</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item">Video Tutorials</li>
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
                    <div class="card-header bg-white text-white">
                        <button type="button" class="btn btn-info mb-2" data-toggle="modal"
                            data-target="#add-video">
                            <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Video</button>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_video" data-order='[[ 0, "desc" ]]'>
                            <thead>
                                <tr role="row">
                                    <th style="width:35%;">Video Title</th>
                                    <th style="width:5%;">Thumbnail</th>
                                    <th style="width:15%;">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($video_tutorials as $tutorial)
                                    <tr role="row">
                                        <td>{{$tutorial->video_title}}</td>
                                        <td>
                                        <img src="{{ asset('assets/img/thumbnail_images/'.$tutorial->thumbnail_image) }}"
                                        width="80" height="60">
                                        </td>

                                        <td>
                 <button type="button" class="btn btn-success btn-sm btn-flat edit-video-btn"
                 data-toggle="modal" data-target="#video-update" value="{{$tutorial->id}}">
                                            <i class="fa fa-edit"></i></button>
                                            <br>
                                        </a>
                                        <form method="POST" action="{{url('delete-video-tutorial/'.$tutorial->id)}}">
                                            @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                    <button type="button" class="btn btn-danger btn-sm btn-flat mb-2 show_confirm_blog"
                                    data-toggle="tooltip">
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

@include('Backend.layouts.inc.add-video-modal')
@include('Backend.layouts.inc.update-video-modal')
</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
     $('.show_confirm_blog').click(function(event) {
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

</script>
<script>
   $('.data_table_video').DataTable({
    "scrollX": false,
    "scrollY": true,
    "ordering": false,

  });

  $(document).on('click','.edit-video-btn',function(e){
        e.preventDefault();

        var video_id=$(this).val();

        // alert(video_id);

        $.ajax({
            method:"GET",
            url:"edit-video/"+video_id,
            success:function(response){
                // console.log(response);
                $('#hidden_video_id').val(response.Video.id);
                $('#video_title').val(response.Video.video_title );
                $('#embade_code').val(response.Video.embade_code);
                $('#video_url').val(response.Video.video_url);
                $('#prod_id').val(response.Video.product_id);

            }
        });

      });

</script>
@endsection
