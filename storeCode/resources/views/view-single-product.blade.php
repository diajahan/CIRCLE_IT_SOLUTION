<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
  <title>{{$product->name}}</title>
   <meta name="description" content="{{$product->meta_description}}">
   <meta name="keywords" content="{{$product->meta_keyword}}">
   <meta name="author" content="Fun Craft by Taiba">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="robots" CONTENT="index, follow">
   <!--To remove cache.................................................-->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-png.png')}}" rel="icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- font-awesome/4.7.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/custom.css?v=1.24')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css?v=1.0')}}" rel="stylesheet">


  <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '884927809517188');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=884927809517188&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
 <script type="text/javascript">
//<![CDATA[
function zeit()
{
    if(document.cookie)
    {
        a = document.cookie;
        cookiewert = "";
        while(a.length > 0)
        {
            cookiename = a.substring(0,a.indexOf('='));
            if(cookiename == "zeitstempel")
            {
                cookiewert = a.substring(a.indexOf('=')+1,a.indexOf(';'));
                break;
            }
            a = a.substring(a.indexOf(cookiewert)+cookiewert.length+1,a.length);
        }
        if(cookiewert.length > 0)
        {
            alter = new Date().getTime() - cookiewert;

            if(alter > 3600000)
            {   
                document.cookie = "zeitstempel=" + new Date().getTime() + ";";
                location.reload(true);
            }
            else
            {
                return;
            }
        }
        else
        {
            document.cookie = "zeitstempel=" + new Date().getTime() + ";";
            location.reload(true);
        }
    }
    else
    {
        document.cookie = "zeitstempel=" + new Date().getTime() + ";";
        location.reload(true);
    }
}
zeit();
//]]>
</script>   
    
    
</head>
<body style="">
@include('inc.header')
<div class="product-section">
    <p style="font-size:12px!important; margin-top:10%; padding-left:1%;" class="py-1 single-product-breadcum">
        <a href="{{url('/')}}">Home</a>&nbsp;/
            <a href="{{url('/view-products')}}" >Products</a>/
                <a href="#" style="color:#DA83A5!important;">{{$product->name}}</a>
        </p>
    <div class="container-fluid" style="padding-left:3%; padding-top:1%;">
        <div class="row">
            <div class="single-page-img-swatch col-lg-5 col-md-4 col-sm-6 col-12 mb-1 ">
                <div class="big-img-div mb-1 pt-2" >
                    <img src="{{ asset('assets/img/gallery/'.$product->image.'?v=1.5')}}"
                        class="p-3" alt="...">
                </div>

                <div class="big-video-div mb-1" style="display:none!important;">
                    <div class="ratio ratio-1x1 mt-5">
                        <div class="ml-2">
                            {!! $product->video !!}
                        </div>
                    </div>
                </div>

                <div class="small-img-div" style="margin-left:5%;">
                    <img style="border:1px solid;" src="{{ asset('assets/img/gallery/'.$product->image.'?v=1.3')}}" class="mt-1" height="50" width="50" alt="...">
                         @foreach ($images as $img)
                              <img style="border:1px solid;" src="{{ asset('assets/img/multiple_images/'.$img->image.'?v=1.3')}}" class="mt-2" height="50" width="50" alt="...">
                          @endforeach
                    <img style="border:1px solid;" src="{{ asset('assets/img/youtub-video.PNG')}}" class="mt-2 video-click-class" height="50" width="50" alt="...">
               </div>



        </div>{{-- End of image.............. --}}
        <div class="col-lg-7 col-md-4 col-sm-6 col-12 mb-2">
            <div class="row product_data quantity-div">
                    <h2 class="py-4 margin-top-h2" style="font-weight:bold; font-size:3vw;">{{$product->name}}</h2>
                        <p class=" margin-top-p mt-" style="font-size:20px; font-weight:bold!important;">Price:&nbsp;&nbsp;&nbsp;
                            <b style="font-size:30px!important; color:#DA83A5;">{{$product->selling_price}}&nbsp;&#2547;&nbsp;</b></p>
                                <hr>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6  margin-top">
                        <input type="hidden" value="{{$product->id}}" class="prod_id">

                        <label for="Quantity mb-3 margin-top-lebel" style="font-size:16; font-weight:bold;">Quantity</label>
                        <div class="input-group text-center mt-4 " >
                            <button class="input-group-text decrement-btn p-2 changeQuantity"style="border-radius:0!important;">-</button>
                            <input type="text" name="quantity" value="1"class="form-control font-weight-bold text-center qty-input p-1">
                            <button class="input-group-text increment-btn  changeQuantity"style="border-radius:0!important;">+</button>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 col-sm-12 col-12" style="margin-top:4%;">
                        <button  type="button" class="btn btn-warning addToCartFromCateSearch mt-3 p-2 text-white btn-size"
                                data-bs-toggle="modal" data-bs-target="#cart_modal_id" value="{{$product->id}}"
                                    style="border-radius:5!important; background:#DA83A5;border:none;"><i
                                        class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;<b>Add to
                                            Cart</b></button>
                        <a href="{{url('buy-now/'.$product->id)}}" >
                            <button type="button" class="btn bg-secondary mt-3 p-2 text-white btn-size" data-toggle="modal"
                                data-target="#" value="{{$product->id}}" style="border-radius:5!important;">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button>
                        </a>
                   </div>
            </div>

                    <div class="mw-100 overflow-hidden text-right aiz-editor-data mt-5">
                        <div class="col-sm-12 mb-2 mt-2 quantity-div">
                            <div class="mw-100 overflow-hidden text-right aiz-editor-data mt-3 mb-3">
                                    <hr>
                                        <h4 class="mb-2 fs-20 fw-1200 " style="font-weight: bolder;">
                                             Product Description:&nbsp;
                                        </h4>
                            </div>
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- End of row --}}

        {{-- Related Product Row................................. --}}
        <h1 class="text-center py-5  mt-2 mb-2" style="font-weight:bold; font-size:4vw">ওর জন্যে এই ফান ক্রাফট বক্স  গুলোও নিতে পারেন</h1>
        <div class="container-fluid mt-3">
       <div class="row p-1 mt-2 related-product-div">
        @foreach ($related_product as $rel_prod)
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
            <a href="{{url('view-single-product/'.$rel_prod->slug)}}" class="">
            <div class="card" style="min-height:260px; width:100%;">
                <div class="card-body text-center">
                 <img src="{{ asset('assets/img/gallery/'.$rel_prod->image.'?v=1.3')}}"
                 class="card-img-top" alt="..." style="">
                  <p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">{{ $rel_prod->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b> </p>
                  <p class="card-title" style="min-height:55px; font-weight:bold; font-size:13px;">{{ $rel_prod->name }}</p>
                </div>
              </div>
            </a>
        </div>
        @endforeach

    </div>
    </div>
        {{-- End of Container --}}


    </div>
</div>
@include('inc.add-to-cart-modal')

  <!-- Vendor JS Files -->
  <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{ asset('assets/js/typed.js') }}"></script>
  <script>
     var typed4 = new Typed('#search-bar-id', {
      strings: ['Ex-Mini Fun Craft Bag',
      'Ex-Double Fun Craft Box', 'Ex-Super Fun Craft Box'],
      typeSpeed: 60,
      backSpeed: 60,
      attr: 'placeholder',
      // bindInputFocusEvents: true,
      loop: true
    });
  </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if(Session::has("status"))
        <script>
    swal("","{!! Session::get('status') !!}","success" );
    </script>
    @endif

    <script>
        $(document).ready(function() {
        $('.single-page-img-swatch .big-video-div').hide();
        $('.single-page-img-swatch .big-img-div').show();

            $(document).on('click', '.increment-btn', function(e) {
                e.preventDefault();

                var incValue = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(incValue, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }

            });

            // for decrement.........................................

            $(document).on('click', '.decrement-btn', function(e) {
                e.preventDefault();

                var decValue = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(decValue, 10);
                value = isNaN(value) ? 0 : value;

                if (value > 1) {
                    value--;
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }

            });


// For image switching .........................
    $('.single-page-img-swatch .small-img-div >img').click(function(){
        $('.single-page-img-swatch .big-video-div').hide();
        $('.single-page-img-swatch .big-img-div').show();
        var $smallImg=$(this).attr('src');
        $('.single-page-img-swatch .big-img-div > img').attr('src', $smallImg);
    });

    $('.single-page-img-swatch .video-click-class').click(function(){
    $('.single-page-img-swatch .big-img-div').hide();
    $('.single-page-img-swatch .big-video-div').show();
});

 // End of doc .........................
        });

    </script>
    @yield('scripts')

</body>
</html>

