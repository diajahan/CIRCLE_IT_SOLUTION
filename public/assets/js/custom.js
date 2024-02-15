$(document).ready(function(){
    loadcart();

    $('coupon_total_hidden').hide();
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
if(value < 1000){
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

    var prod_size =$('input[name="checked_radio"]:checked').val();


        // alert(prod_size);

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
            'product_size' : prod_size,
        },
        success: function (response) {

             loadcart();
             if(response.status =='201')
             {
              swal("",response.msg,"warning");
             }
           else if(response.status =='200')

           {
            loadcart();
           }
        }
    });

});




$(document).on('click','.FromBuyNow',function (e) {
    e.preventDefault();
    
    // alert('This is working');
    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var prod_qty = $(this).closest('.product_data').find('.qty-input').val();

    var prod_size =$('input[name="checked_radio"]:checked').val();


        // alert(prod_qty);

    $.ajax({
        method: "POST",
        url: "/set-buy-now",
        data: {
            'product_id' : prod_id,
            'product_qty' : prod_qty,
            'product_size' : prod_size,
        },
        success: function (response) {
            
             loadcart();
             
            if(response.status =='201')
                {
                 swal("",response.msg,"warning");
                }
              else if(response.status =='200')
              {
                loadcart();
                
                location.replace('/checkout-page');
                // window.location.href='https://funcraftbytaiba.com/view-cart';
                // window.location.reload(true);

              }

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


// ..................Apply Coupon.....................................

$(document).on('click', '#apply_coupon_button', function (e) {
    e.preventDefault();
    var coupon_code=$('#coupon_code').val();
    var delivery_charge = parseInt($('input#delivery_charge_hidden').val());

   if($.trim(coupon_code).length == 0){
    error_coupon = "Please enter valid Coupon";
    $('#coupon_code_err').text(error_coupon);
   }else{
    error_coupon = "";
    $('#coupon_code_err').text(error_coupon);
   }

   if(error_coupon != ''){
    return false;
   }


   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    type: "POST",
    url: "check-coupon-code",
    data: {
        'coupon_code':coupon_code,
        'delivery_charge':delivery_charge
    },
    success: function (response) {

       if(response.status =='200'){
            // console.log(response);
            swal("",response.msg,"warning");
            $('#coupon-tr').hide();
        }else{
            // console.log(response);
        $('#coupon-tr').show();
        $('#coupon_total_hidden').val(response.totalAmount);
        $('#total_hidden').val(0);
        $('#discount').html(response.couponPercentage);
        $('#grand_total_id').html(response.withDcharge);
        $('#coupon_code_hidden').val(response.couponCode);
        }


    }
});


});



// End of doc.........................................
});




