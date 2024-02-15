<!-- Modal -->
<div class="modal fade" id="cart_modal_id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="max-width:450px!important; max-height:150px!important;" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">
              <div class="text-center mb-1">
                  <i class="fa  fa-check-circle fa-2x text-success success-icon"></i>
                  <!--<i class="fas fa-exclamation-triangle fa-2x text-danger modal-warning-icon"></i>-->

                  <h6 class="item-added-to-cart mt-3"  style="font-weight:bold; font-size:18px; margin-bottom:1%;">Item added to your cart!</h5>
              </div>
              <div class="modal-footer" style="max-height:100px!important;">
              <a href="{{url('/view-products')}}">
                <button type="button" style="border:none; border-radius:0!important;"
                class="btn btn-outline-success mb-1 mb-sm-0 "data-bs-dismiss="modal">Go Back to Products</button></a>
                <a style="border:none; border-radius:0!important; background:#E62E04!important; font-weight:bold;" href="{{ url('/view-cart') }}" class="btn mb-1 mb-sm-0">
                    <h4 class="text-white">Checkout</h4>
                    </a>
              </div>
        </div>
          </div>
      </div>
  </div>
  </div>
        </div>

      </div>
    </div>
  </div>
