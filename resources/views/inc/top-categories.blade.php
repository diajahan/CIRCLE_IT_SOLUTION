<section id="gallery" class="gallery section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div class="section-header">
        <h2 style="font-size:2vw; font-weight:bold; color:#000;">Top Categories</h2>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            @foreach ($cate as $cate)
            <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/category-images/'.$cate->image)}}">
                <a href="{{url('view-cate-products/'.$cate->id)}}">
                    <img loading="lazy" src="{{ asset('assets/img/category-images/'.$cate->image)}}" class="img-fluid" alt="">
                <!--    <img class="lazyload mx-auto img-fit has-transition"-->
                <!--src="{{asset('assets/img/placeholder.jpg') }}"-->
                <!--data-src="{{ asset('assets/img/category-images/'.$cate->image) }}"-->
                <!--onerror="this.onerror=null;this.src='{{asset('assets/img/placeholder.png') }}';">-->
        </a>
                </a></a></div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->
