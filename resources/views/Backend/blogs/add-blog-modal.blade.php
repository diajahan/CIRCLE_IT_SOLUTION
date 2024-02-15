
<div class="modal fade" id="add-blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 650px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Add Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <form id="form" class="form-horizontal" action="{{ url('add-new-blog') }}"
                method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Blog Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="cate_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">যা যা লাগবে</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="equipments[]">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">Cover Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="blog_cover_image" id="input-file-now-custom-3" class="form-control m-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">More Blog Images</label>
                        <div class="col-sm-8">
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
