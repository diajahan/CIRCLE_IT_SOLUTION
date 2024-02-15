
// $(document).ready(function ($){
    // DAtatable................
  $('.data_table').DataTable({
    "scrollX": true,
    "scrollY": true
  });


  // jQuery('.data_table_onHold_single_view,.data_table_onHold,.data_table_view_single,.data_table_rtp,.data_table_rtd,.data_table_ur,.data_table_delivered,.data_table_inTransit,.data_table_inStock,.data_table_iho,.data_table_returning,.data_table_noStatus,.data_table_sundarban').DataTable
  // ({
  //   "scrollX": false,
  //   "scrollY": true
  // });



// jquery For  Pending Order ......................................................................................



// for CSRF Token........................................



    // for increment.........................................
    $(":input#pending_quantity").on('keyup mouseup', function () {
      var incValue = $("#pending_quantity").val();
      // alert(incValue);
      var value = parseInt(incValue , 10);
      value =isNaN(value) ? 0 : value;
      if(value > 0){
          $(":input#pending_quantity").val(value);
      }

  });
// End of document line...........................................
