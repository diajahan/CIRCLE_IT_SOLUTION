@extends('master')
@section('content')
@include('inc.hero-section')
<main id="main">
<!-- ======= Main Video Section ======= -->
@include('inc.main-page-video')
<!-- ======= Category Section ======= -->
@include('inc.top-categories')
<!-- ======= Our Packages Section ======= -->
@include('inc.events-section')
<!-- ======= About Us Section ======= -->
@include('inc.about-us')
<!-- ======= Gurdian Reviews Section ======= -->
@include('inc.customer-reviews')
</main><!-- End #main -->
@endsection
