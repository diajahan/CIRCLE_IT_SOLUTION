@extends('master')
@section('title', 'Customers Feedback')
@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact submit-feedback-div1" style="margin-top:5%;">
        <div class="container" data-aos="fade-up">
          <div class="section-header give-your-feedback-p">
            <p style="font-size:30px; font-weight:bold;" >Give<span>Your Feedback</span></p>
          </div>
          <form action="{{url('submit-review')}}" method="POST" role="form" class="php-email-form p-2 p-md-4"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6 col-6 form-group">
                <input type="text" name="name" class="form-control" id="name"  value="{{old('name')}}" placeholder="Your Name" required>
              </div>
                <div class="col-xl-6 col-md-6 col-sm-6 col-6 form-group">
                <input type="text" class="form-control" name="email" id="email"  value="{{old('email')}}"
                    placeholder="Email" required>
              </div>
            </div>
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 form-group">
                <textarea class="form-control" name="review" id="review" rows="1" value="{{old('review')}}" placeholder="Feedback" required></textarea>
              </div>
            <div class="col-sm-12 col-12 col-xl-12 col-md-12 form-group">
                <small class="text-secondary">Your photo</small>
                <input type="file" id="input-file-now-custom-3" class="form-control mt-2" name="image" id="image">
            </div>

            @if (count($errors) > 0)
            <div class="alert text-white" style="background:#DA83A5;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="text-center mt-2"><button type="submit" >Submit Feedback</button></div>
          </form>
          <!--End Contact Form -->
        </div>
      </section><!-- End Contact Section -->


        <section id="contact" class="contact mb-3 submit-feedback-div" style="padding: 0% 0 !important;">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p style="font-size:25px; font-weight:bold;" >Customers<span>Feedback</span></p>
          </div>
        @foreach($reviews as $review)
          <div class="mb-5">
            @if($review->image !='')
            <img class="logo" height="50" width="50"src="{{ asset('assets/img/CustomerFeedbackImage/'.$review->image)}}" style="border-radius:50%;" alt="Customer Pic"><br>
            @elseif($review->image =='')
            <img class="logo" height="50" width="50"src="{{ asset('assets/img/149071.png')}}" style="border-radius:50%;" alt="Customer Pic"><br>
            @endif
           <span class="" style="font-size:15px;">{{$review->name}}</span><br>    
             <span class="" style="font-size:13px; text-align:justify;
                    text-justify: inter-word;">
                 {{$review->review}}
                 </span>
            </div>         
          @endforeach
          <!--End Contact Form -->
        </div>
      </section>
      <!-- End Customer Feedback Section -->
@endsection
