@extends('master')
@section('title', 'Submit Your Craft')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mb-5 submit-craft-div" style="margin-top:7%;">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Submit<span>Your Craft</span></p>
          </div>
          <form action="{{url('submit-your-craft')}}" method="POST" role="form" class="php-email-form p-3 p-md-4"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-12 col-12 form-group">
                <input type="text" name="name" class="form-control" id="name"  value="{{old('name')}}" placeholder="Your Name" required>
              </div>
            <div class="form-group col-xl-6 col-md-6 col-sm-12 col-12">
                <input type="text" class="form-control" name="phone" id="phone"  value="{{old('phone')}}"
                placeholder="Phone Number" required>
              </div>
            </div>

            <div class="form-group col-sm-12 col-12">
                <input type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple>
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
            <div class="text-center mt-3"><button type="submit">Submit Your Craft</button></div>
          </form>
          <!--End Contact Form -->
        </div>
      </section><!-- End Contact Section -->
@endsection
