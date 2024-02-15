<div class="modal fade" id="video-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Update Video tutorial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <form id="form" class="form-horizontal" action="{{ url('update-video-tutorial') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" class="form-control" name="hidden_video_id" id="hidden_video_id">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Video Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="video_title" id="video_title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Embade Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="embade_code" id="embade_code">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Video URL</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="video_url" id="video_url">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Product Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prod_id" id="prod_id">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Thumbnail</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
