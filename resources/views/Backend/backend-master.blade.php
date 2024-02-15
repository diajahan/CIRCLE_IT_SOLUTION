<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{config('app.Name','tukitaki.com')}}</title>
<!-- Favicons -->
<!--<link href="{{ asset('backend/dist/img/logo-lb-f.jpg') }}" rel="icon">-->
<!--<link href="{{ asset('backend/dist/img/logo-lb-f.jpg')}}" rel="apple-touch-icon">-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css?v=3.2.0')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- Jquery datepicker --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <style>
.delete-swal-wide{
    width:350px !important;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">
    @include('Backend.layouts.inc.header')
    @include('Backend.layouts.inc.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('Backend.layouts.inc.footer')
</div>
{{-- // Jquery Scripts. --}}
{{-- JS Link --}}
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<script charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script> $.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('backend/dist/js/adminlte.js?v=3.2.0')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>

<script>
  $(document).ready(function() {
  $('#summernote').summernote({
        height: 150
  });
});
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
<script> $(function(){ $('.datepicker').datepicker({ dateFormat: "yy-mm-dd" }).val()});</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session::has("status"))
<script>
  swal("","{!! Session::get('status') !!}","success" );
</script>
@endif
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
</body>
@yield('scripts')
</html>
