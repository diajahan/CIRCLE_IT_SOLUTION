<section id="events" class="events">
<div class="container">
      <div class="section-header">
        <h1 style="font-size:4vw; font-weight:bold; color:#DA83A5;">আমাদের পণ্য সমূহ</h1>
         <!--<h1 style="font-size:4vw; font-weight:bold; color:#DA83A5;">আমাদের মেক্সি কালেকশন্স</h1>-->
      </div>

    <div class="row ml-2" style="margin-left:;">
        @foreach ($products as $product)
            <div class="ml-5 col-lg-3 col-md-3 col-sm-6 col-6 mt-2">
              <a href="{{url('view-single-product/'.$product->slug)}}" >
                <div class="card h-100" style="min-height:220px; width:100%;">
                        <img loading="lazy" src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$product->image)}}"
                            class="card-img-top p-3" alt="..." style="min-height:20%;">

                        <div class="card-body text-center">
                            <!--<p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">-->
                            <!--    {{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>-->
                            <!--<p class="card-title" style="min-height:40px; font-weight:bold; font-size:13px;">{{$product->name}}</p>-->
                        </div>
                    <p class="text-center" style="font-weight:bold; font-size:20px; color:#99244D; position:absoute!important;buttom:8%!important;">{{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>
                    <p class="text-center" style="font-weight:bold; font-size:13px; position:absoute!important;buttom:7%!important;">{{$product->name}}</p>  
                </div>
            </a>    
         </div>
        @endforeach
    </div>

</div>
</section><!-- End Events Section -->
