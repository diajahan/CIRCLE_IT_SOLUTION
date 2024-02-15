<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="https://tukitaki.bdclearance.com" target="_blank" class="brand-link" >
        <h4 class="brand-text text-white font-weight-bold" style="font-size:20px!important;">tukitaki.com</h4>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image" style="margin-left:30%;">
                <img src="{{ asset('backend/dist/img/') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    @if (Session::has('LoggedUserId'))
                        @php
                            $user = App\Models\User::where('id', '=', Session::get('LoggedUserId'))->first();
                        @endphp
                        {{ $user->name }}
                    @endif
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>
                <li class="nav-header text-secondary ml-3">MANAGE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            Product
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/product-lists') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- End of product........... --}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                            Category
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/category-list') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                            Orders
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/orders-list') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Orders</p>
                            </a>
                        </li>

                    </ul>
                </li>
                
                
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                           Footer Info 
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/footer-info') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Update Footer Info</p>
                            </a>
                        </li>

                    </ul>
                </li>
                
                                
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                           Logo
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/logo-info') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Logo Setup</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                            Picture Tutorials
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/manage-blogs') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Picture Tutorials</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                            Video Tutorials
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/manage-video-tutorials') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Videos</p>
                            </a>
                        </li>

                    </ul>
                </li> --}}
{{-- ....................Google Analytics.............. --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck mr-2"></i>
                        <p>
                            Google Analytics
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/google-analytics-report') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Report</p>
                            </a>
                        </li>

                    </ul>
                </li>
        </nav>
    </div>
</aside>
