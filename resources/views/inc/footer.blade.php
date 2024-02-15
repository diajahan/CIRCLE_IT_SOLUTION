<footer id="footer" class="footer" style="">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
              @php
              use App\Models\Footer;
              $footer=App\Models\Footer::where('id','1')->first();
              @endphp
            <h4>Address</h4>
            <p style="font-weight:bold;">House#&nbsp;{{ $footer->house }}<br>{{ $footer->floor }}<br>
            {{ $footer->road }}<br>
            {{$footer->city }}<br>
            {{ $footer->country }}
            
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:&nbsp;{{ $footer->phone }}</strong><br>
              <strong>Email:&nbsp;{{ $footer->email }}</strong><br>
              <strong>Website:&nbsp;{{ $footer->website }}</strong><br>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Quick links</h4>
            <p>
            {{-- <a href="https://tukitaki.bdclearance.com/#about" class="" style="color:#fff!important;">About Us</a><br> --}}
            <a href="{{url('')}}" class="" style="color:#fff!important;">Terms & Conditions</a><br>
            <a href="{{url('')}}" style="color:#fff!important;">Privacy Policy</a><br>
            <a href="{{url('')}}" style="color:#fff!important;">Return Policy</a><br>

            <br>
           </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="" class="youtube " target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram" target="_blank"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin" target="_blank"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $footer->copy_right }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://tukitaki.bdclearance.com">@ {{ $footer->copy_right }}</a>
      </div>
    </div>

    <div class="whatsapp-chat">
    <a href="https://wa.me/+8800?text=Is%20there%20anyone%20available%20in%20chat%20?%20" target="_blank">
        <img src="{{ asset('assets/img/whatsapp-logo.png')}}" alt="whatsapp-chat" height="50" width="50">
    </a>
  </div>

  <div class="mobile-nav-header p-2">
        <li class="mt-5" style="margin-left:15%; display:inline!important; font-weight:bold; padding:1px; line-hight:1px;"><a href="{{url('/')}}"style="font-size:12px; color:#fff;">Home</a></li>
        <li style="margin-left:2%; display:inline!important;  font-weight:bold; padding:1px; line-hight:1px;"><a href="https://tukitaki.bdclearance.com/#events" style="font-size:12px; color:#fff;">Our Products</a></li>
        <li style="margin-left:2%;display:inline!important; font-weight:bold; padding:1px; line-hight:1px;"><a style="font-size:12px; color:#fff;" href="{{url('/mobile-cate')}}">Categories</a></li>
        <li style="margin-left:2%!important; display:inline!important; font-weight:bold; padding:1px; line-hight:1px;"><a href="https://tukitaki.bdclearance.com/#about" style="font-size:12px; color:#fff;">About Us</a></li>

  </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->
