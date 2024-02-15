
<div class="modal fade" id="update-logo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold">Update Logo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5">
            <form id="form" class="form-horizontal" action="{{ url('update-logo') }}"
            method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('PUT')
            
                    
                 <div class="form-group row">
                    <label for="logo" class="col-sm-3 col-form-label">Attach Logo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="logo" id="logo">
                    </div>
                 </div>
                 
                  <input type="hidden" class="form-control mt-3" name="hidden_id_logo" id="hidden_id_logo">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

