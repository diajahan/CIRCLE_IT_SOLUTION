<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />  
  <!-- Above Code for cleaning cache -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description">
<meta content="" name="keywords">
<title>Fun Craft by Taiba</title>
  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-png.png')}}" rel="icon">
  <link href="{{ asset('assets/img/logo-png.png')}}" rel="apple-touch-icon">
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
  <link href="{{asset('assets/css/custom.css?v=1.26')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css?v=1.0')}}" rel="stylesheet">
  
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


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
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
    @yield('scripts')

</body>
</html>
