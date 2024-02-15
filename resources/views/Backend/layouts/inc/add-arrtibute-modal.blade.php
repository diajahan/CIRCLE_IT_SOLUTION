<div class="modal fade" id="add-attribute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 650px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Add Attribute</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                {{-- Form start --}}

                <form id="form"  action="{{ url('add-attribute') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="attribute" class="col-sm-4 col-form-label">Attribute Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="attribute_name" id="attribute">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create & Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
