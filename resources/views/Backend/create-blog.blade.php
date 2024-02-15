@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h2>Create Blog</h2> --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Home
                        </li>
                        <li class="breadcrumb-item">Blogs</li>
                        <li class="breadcrumb-item active">add Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


<section class="content">
<div class="container mt-3" style="border:1px solid;">
    <br>
      <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Create Blog</a>
        </li>
        <li class="nav-item getblogId">
          <a class="nav-link getblogId" data-toggle="tab" href="#menu1">Add Blog Content</a>
        </li>
      </ul>
<div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
		    <form id="form" class="form-horizontal" action="{{ url('add-new-blog-step1') }}"
                method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Blog Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="blog_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">যা যা লাগবে</label>
                        <div class="col-sm-8">
                            <textarea name="equipment" id="summernote" rows="4" class="form-control border "></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Cover Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="blog_cover_image" id="input-file-now-custom-3"
                            class="form-control m-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Intoduction (If have)</label>
                        <div class="col-sm-8">
                            <input type="text" name="intro" id="input-file-now-custom-3"
                            class="form-control m-2">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
      </div>
    {{-- end of container tab-pane active --}}

      <div id="menu1" class="container tab-pane fade"><br>
                <form id="form" class="form-horizontal" action="{{ url('add-blog-content') }}"
                method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf

                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Blog Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="blog_title" id="blog_title"
                            class="form-control m-2" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Blog Id</label>
                        <div class="col-sm-8">
                            <input type="text" name="blog_id" id="blog_id"
                            class="form-control m-2" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-8">
                            <textarea name="content" id="summernote" rows="4" class="form-control border "></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">More Images</label>
                        <div class="col-sm-8">
                            <input type="file" name="images[]" id="input-file-now-custom-3"
                            class="form-control m-2" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
{{-- end of container tab-pane menu1 --}}
      </div>
{{-- end of tab-content --}}
</div>



</div>
{{-- end of container --}}
</section>

   @endsection

   @section('scripts')
   <script>
$(document).ready(function(){
    $(document).on('click', '.getblogId', function (e) {
            e.preventDefault();

    $.ajax({
      method: "GET",
      url: "/blog-id",
      success: function (response) {
        console.log(response);
        $('#blog_id').val(response.blog.id);
        $('#blog_title').val(response.blog.title);

      }
    });

});
// end of document
});
   </script>
   @endsection

