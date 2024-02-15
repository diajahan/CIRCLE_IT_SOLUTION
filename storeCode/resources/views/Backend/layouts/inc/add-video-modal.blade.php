
<div class="modal fade" id="add-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold">Add Video</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5">
            <form id="form" class="form-horizontal" action="{{ url('add-new-video') }}"
            method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Video Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="video_title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 control-label">Video Embade Code</label>
                    <div class="col-sm-8">
                        <input type="text" id="input-file-now-custom-3"
                        class="form-control m-2" name="embade_code">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-4 control-label">Video URL</label>
                    <div class="col-sm-8">
                        <input type="text" id="input-file-now-custom-3"
                        class="form-control m-2" name="video_url">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-4 control-label">Thambnail Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="video_thumbnail_image"
                        id="input-file-now-custom-3" class="form-control m-2">
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
