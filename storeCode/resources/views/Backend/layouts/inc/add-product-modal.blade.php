<div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 650px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Add Product</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                {{-- Form start --}}

                <form id="form"  action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="in-transit-order-id" id="in-transit-order-id">
                        <label for="" class="col-sm-4 col-form-label">Product Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="product_name" id="InTransit_order_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-4 control-label">Category </label>
                        <div class="col-sm-8">
                            <select name="cate_id" class="form-select form-control pr-2" aria-label="Default select example">
                                <option value="">Select a Category</option>
                                @foreach ($categories as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">SKU</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sku" id="sku">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="summernote" rows="3" class="form-control border "></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Selling Price</label>
                        <div class="col-sm-8">
                            <input name="selling_price" type="text" class="form-control border ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Quantity</label>
                        <div class="col-sm-8">
                            <input name="qty" type="text" class="form-control border ">
                        </div>
                    </div>

                    <div class="form-group row" >
                        <label for="" class="col-sm-4 col-form-label">Package</label>
                        <div class="col-sm-8" >
                            <select class="form-control" name="package" id="package">
                                <option value="1" slected="">Active</option>
                                   <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" >
                        <label for="" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8" >
                            <select class="form-control" name="status" id="status">
                                <option value="1" slected="">Active</option>
                                   <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Slug</label>
                        <div class="col-sm-8">
                            <input name ="slug" type="text" class="form-control border">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Meta title</label>
                        <div class="col-sm-8">
                            <input name ="meta_title" type="text" class="form-control border">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Meta Keywords</label>
                        <div class="col-sm-8">
                            <textarea name="meta_keyword"  rows="2" class="form-control border"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">Meta Description</label>
                        <div class="col-sm-8">
                            <textarea name="meta_description"  rows="2" class="form-control border "></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">Tutorial Video</label>
                        <div class="col-sm-8">
                            <input type="text" name="video" id="input-file-now-custom-3" class="form-control m-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">Cover Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="cover_image" id="input-file-now-custom-3" class="form-control m-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 control-label">More Image</label>
                        <div class="col-sm-8">
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
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
