<div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 500px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Update Price</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                {{-- Form start --}}
                <form id="form"  action="{{ url('update-product') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <input type="hidden" class="form-control" name="prod_id" id="prod_id">
                        <label for="new_price" class="col-lg-3 col-md-3 col-sm-7 col-6 col-form-label">New Price</label>
                        <div class="col-lg-9 col-md-9 col-sm-5 col-6">
                            <input type="text" class="form-control" name="new_price" id="new_price">
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
