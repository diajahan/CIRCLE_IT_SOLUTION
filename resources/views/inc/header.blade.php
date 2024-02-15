@php
use App\Models\Logo;
$logo=App\Models\Logo::where('id','1')->first();
@endphp
<header class="p-2 text-dark fixed-top mb-5"  style="background:#fff; border-bottom:#DA83A5 2px solid;">
    <div class="container-fluid mb-2 mt-2" style="">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{url('/')}}" class="nav-logo" style="margin-left:0%!important; margin-top:-2%!important;">
          <img class="logo nav-logo-img" height="40" width="50" style="" src="{{ asset('assets/img/'.$logo->image)}}">
        </a>
        <form action="{{url('submit-search')}}" method="POST" class="header-search-form">
            @csrf
                <div class="input-group">
                    <input type="search" name="product_name" id="search-bar-id" class="form-control" style="width:55%" class="form-control" placeholder="Search product" required aria-describedby="basic-addon1">

                    <button type="submit" class="btn" style="background:#DA83A5!important; border-radius:0;">
                            <i class="fa fa-search text-white"></i>
                    </button>
                </div> <!-- input-group end.// -->
        </form>
                @php
                 use App\Models\SelectedCategory;
                 $category=App\Models\SelectedCategory::where('status','=','1')->get();
                @endphp
        <ul class="nav col-12 col-lg-4 mr-4  mb-md-0" style="margin-top:-1%;">
            <li class="nav-li-1st" style="margin-right:1px; margin-bottom:1px; margin-top:1px; font-weight:bold; padding:1px; line-hight:1px;"><a href="{{url('/')}}" class="" 
            style="font-size:14px; color:#99244D;">Home</a></li>
            <li style="margin-left:2%!important; font-weight:bold; padding:1px; line-hight:1px; margin-top:1px;"><a href="https://tukitaki.bdclearance.com/#events" style="font-size:14px; color:#99244D;">Our Products</a></li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  
              style="font-size:14px; color:#99244D; font-weight:bold; margin-top:-3px;">
                Category
              </a>
                  <ul class="dropdown-menu" style="margin-top:11%!important; border-radius:0; width:250px!important;">
                     @foreach ($category as $categ)
                      @if($categ->level==0)
                        <li class="nav-item dropend"> 
                          <a href="{{url('cate-products/'.$categ->id)}}" class="dropdown-item"
                              style="font-size:14px; color:#99244D; font-weight:bold;">{{$categ->category_name}}</a>
                        @endif 
                        @if($categ->childrenSelected == true)
                               <ul class="dropdown-menu " style="border-radius:0; width:250px!important;">
                                @foreach ($categ->childrenSelected as $cate)
                                    <li style=""><a class="dropdown-item" href="{{url('cate-products/'.$cate->id)}}" 
                                    style="font-size:14px; color:#99244D; font-weight:bold;">{{$cate->category_name}}</a></li>
                                   @endforeach 
                               </ul>
                            @endif        
                        </li>
                    @endforeach    
                  </ul>
                </li>

            <li style="margin-left:2%!important; font-weight:bold; padding:1px; line-hight:1px;"><a href="https://tukitaki.bdclearance.com/#about" class="" style="font-size:14px; color:#99244D;margin-top:1px;">About Us</a></li><br>
         </ul>


        <div class="mb-1 mt-1 nav-last-div text-left col-lg-4" style="margin-top:-1%!important;">
          <span style="">
            <a href="{{ url('/view-cart') }}">
            <i class="fa fa-cart-plus fa-2x PositionCartCount mt-2" aria-hidden="true" style="color:#DA83A5;">&nbsp;&nbsp;&nbsp;&nbsp;</i>
            <!--
            <span class="PositionCartText" style="color:#DA83A5!important; font-weight:bold; margin-left=-5px!important;">Cart</span> -->

            <span class="cart-count badge rounded-pill PositionCartSpan"
            style="background:#DA83A5;">0</span>
        </a>
        </span>
            <span class="product-button" style="">
                <a class="btn-book-a-table text-white" href="{{url('/view-products')}}">
                    <button type="button" class="btn btn-warning mt-1 text-white ml-2"
                        style="background-color:#DA83A5; font-weight:bold; border:none;">
                                All Products
                    </button>

                </a>
            </span>
          </div>

      </div>
    </div>
  </header>
