$(document).ready(function(){
    loadcart();
function loadcart(){
        $.ajax({
            method: "GET",
            url: "/load-cart-item",
            success: function (response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // console.log(response.count);

            }
        });
    }
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // for increment.........................................
$(document).on('click','.increment-btn', function (e) {
e.preventDefault();

var incValue =$(this).closest('.product_data').find('.qty-input').val();
var value = parseInt(incValue , 10);
value =isNaN(value) ? 0 : value;
if(value < 10){
    value++;
    $(this).closest('.product_data').find('.qty-input').val(value);
}

});

// for decrement.........................................

$(document).on('click','.decrement-btn', function (e) {
e.preventDefault();

var decValue = $(this).closest('.product_data').find('.qty-input').val();
var value = parseInt(decValue , 10);
value =isNaN(value) ? 0 : value;

if(value > 1){
    value--;
    $(this).closest('.product_data').find('.qty-input').val(value);
}

});




$(document).on('click','.changeQuantity', function (e) {

    e.preventDefault();

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var qty = $(this).closest('.product_data').find('.qty-input').val();

    $.ajax({
        method : "PUT",
        url: "update-cart",
        data: {
            "product_id" : prod_id ,
             "quantity"  :qty,
             },
        success: function (response) {
            $('.cartDivReload').load(location.href + " .cartDivReload");
        }
    });


});


$(document).on('click','.addToCartFromCateSearch',function (e) {
    e.preventDefault();
    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var prod_qty = $(this).closest('.product_data').find('.qty-input').val();

// alert(prod_qty)
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $.ajax({
        method: "POST",
        url: "/add-to-cart",
        data: {
            'product_id' : prod_id,
            'product_qty' : prod_qty,
        },
        success: function (response) {

             loadcart();

            //  alert(response);
        }
    });

});

 // $('.delete-cartItem').click(function (e) {
    $(document).on('click', '.delete-cartItem', function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();

        // alert(prod_id)

        $.ajax({
            method: "GET",
            url: "/delete_cart_item/"+prod_id,
            // data: {

            // "product_id":prod_id,

            // },
            success: function (response) {
            loadcart();
            $('.cartDivReload').load(location.href + " .cartDivReload");
            swal("",response.status,"success");
            }

        });

    });



// End of doc.........................................
});




