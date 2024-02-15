<section id="events" class="events">
<div class="container">
      <div class="section-header">
         <h1 style="font-size:4vw; font-weight:bold; color:#DA83A5;">আমাদের প্যকেজ সমূহ</h1>
      </div>
      
    <div class="row ml-2" style="margin-left:;">
        @foreach ($products as $product)
            <div class="ml-5 col-lg-3 col-md-3 col-sm-6 col-6 mt-2">
                <div class="card" style="min-height:220px; width:100%;">
                    <a href="{{url('view-single-product/'.$product->slug)}}" >
                        <img src="{{ asset('assets/img/gallery/'.$product->image.'?v=1.3')}}"
                            class="card-img-top p-3" alt="..." style="min-height:20%;">
                        <div class="card-body text-center">
                            <p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">
                                {{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>
                            <p class="card-title" style="min-height:40px; font-weight:bold; font-size:13px;">{{$product->name}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</div>
</section><!-- End Events Section -->
