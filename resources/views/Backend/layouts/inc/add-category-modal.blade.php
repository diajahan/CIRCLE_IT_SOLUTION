<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 650px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Select Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @php
                $categories =App\Models\Category::get();
            @endphp
            <div class="modal-body px-5">
                <form id="form" class="form-horizontal" action="{{ url('/post-api-product') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Category</label>
                        <div class="col-sm-8">
                            <select class="form-control selectpicker" name="category[]" id="category"
                            required="" multiple data-live-search="true">
                            <option disable>Select Category</option>
                            @foreach ($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Import Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

