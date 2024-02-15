<!DOCTYPE html>
<html lang="en">
<head>
<meta name="facebook-domain-verification" content="9n4o2zkh4pxidn2qqqznprkqm9ocl5"/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <!-- Above Code for cleaning cache -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description">
<meta content="" name="keywords">
<title>@yield('title')</title>

  <!-- Favicons -->
  <!--<link href="{{ asset('assets/img/logo-lb-f.jpg')}}" rel="icon">-->
  <!--<link href="{{ asset('assets/img/logo-lb-f.jpg')}}" rel="apple-touch-icon">-->
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
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css?v=1.13')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css?v=1.174')}}" rel="stylesheet">
  <link href="{{asset('assets/css/custom.css?v=1.315')}}" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-263417995-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-263417995-1');
</script>

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
</head>
<body style="">
@include('inc.header')
<!-- ======= Hero Section ======= -->
@yield('content')
<!-- ======= Footer ======= -->
@include('inc.footer')

<!-- Vendor JS Files -->
  <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/custom.js?v=1.8')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js?v=1.7')}}"></script>
  <script src="{{ asset('assets/js/typed.js') }}"></script>
  <script>
     var typed4 = new Typed('#search-bar-id', {
      strings: ['Ex-Cotton Mexi','Ex-Linen Mexi',
      'Ex-Nursing Mexi ', 'Ex-Full Hata Cotton Mexi', 'Ex-China Linen Ve Neck Kaftan Mexi'],
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

        @if(Session::has("error"))
        <script>
        swal("","{!! Session::get('error') !!}","warning" );
        </script>
        @endif
    @yield('scripts')


</body>
</html>
