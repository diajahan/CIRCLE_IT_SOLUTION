
<div class="modal fade" id="update-footer-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold">Update Footer Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5">
            <form id="form" class="form-horizontal" action="{{ url('/update-footer-info') }}"
            method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="form-control mb-3" name="hidden_id_footer" id="hidden_id_footer">
                <div class="form-group row">
                    <label for="house" class="col-sm-3 col-form-label">House No.</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="house" id="house">
                    </div>
                </div>
                
               <div class="form-group row">
                    <label for="floor" class="col-sm-3 col-form-label">Floor & Building</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="floor" id="floor">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="road" class="col-sm-3 col-form-label">Road</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="road" id="road">
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="city" class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                </div>
                
               <div class="form-group row">
                    <label for="country" class="col-sm-3 col-form-label">Country</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="country" id="country">
                    </div>
                </div>
                
               <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                </div>
                
              <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                </div>
                
            <div class="form-group row">
              <label for="website" class="col-sm-3 col-form-label">Website</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="website" id="website">
               </div>
            </div> 
            
             <div class="form-group row">
              <label for="copy_right" class="col-sm-3 col-form-label">Copr Right</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="copy_right" id="copy_right">
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

