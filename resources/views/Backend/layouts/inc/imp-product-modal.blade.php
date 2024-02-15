<div class="modal fade" id="mod_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 700px!important;"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Select Category</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                {{-- Form start --}}
            <form id="form"  action="{{ url('/post-api-product') }}" method="POST" enctype="multipart/form-data"
               class="form-horizontal">
                    @csrf
                    @php
                    $categories =App\Models\Category::get();
                    @endphp
                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Category</label>
                        <div class="col-sm-8 search-select-box">
                            <select class="form-control selectpicker w-100" name="category[]" id="category"
                            multiple data-live-search="true" required="">
                            <option disable>Select Category</option>
                            @foreach ($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach
                         </select>
                    </div>
                    </div>
                       <div class="form-group row">
                        <label for="percentage" class="col-lg-4 col-md-4 col-form-label">Price Percentage</label>
                        <div class="col-lg-8 col-md-8 col-sm-5 col-6">
                         <input type="number" class="form-control w-100" name="percentage" id="percentage">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Import Product</button>
                    </div>
                </form>
        </div>
    </div>
</div>
