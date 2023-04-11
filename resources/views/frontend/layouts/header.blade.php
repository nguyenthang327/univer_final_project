
<!-- header-area -->
<header class="header-style-two">

    <!-- header-top -->
    <div class="header-top-area">
        <div class="custom-container-two">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="header-top-left">
                        <ul>
                            <li>
                                <div class="ship-to">
                                    <span>Ship to</span>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="img/icon/ship_flag.png" alt=""> US/USD
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"><img src="img/icon/australia.png" alt="">AUS/USD</a>
                                            <a class="dropdown-item" href="#"><img src="img/icon/bng.png" alt="">BNG/TK</a>
                                            <a class="dropdown-item" href="#"><img src="img/icon/india.png" alt="">IN/RP</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="heder-top-guide">
                                    <span>Quick Guide</span>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Help
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="terms-conditios.html">Returns</a>
                                            <a class="dropdown-item" href="terms-conditios.html">Privacy</a>
                                            <a class="dropdown-item" href="terms-conditios.html">Terms</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="heder-top-guide">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Sell With Us
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item" href="my-account.html">Seller Login</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="header-top-right">
                        <ul>
                            <li>
                                @if(!$globalCustomer)
                                    <a href="{{route('customer.register.step1')}}"><i class="flaticon-user"></i>{{ trans('language.customer_register.title') }}</a>
                                    <span>{{ trans('language.or') }}</span>
                                    <a href="{{route('login')}}">{{ trans('language.customer_login.title_header') }}</a>
                                @else
                                    <a class="nav-link" href="#" data-toggle="dropdown" role="button">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                        <span>{{ $globalCustomer->full_name }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center">
                                        <img class="header-avartar avatar-customer"
                                            src="{{ !empty($globalCustomer->avatar) ? asset('storage/'.$globalCustomer->avatar) : '' }}"
                                            alt="{{ $globalCustomer->full_name }}"
                                            onerror="this.onerror=null;this.src='{{ asset('images/user-default.png') }}';"
                                            />
                                        <div class="dropdown-divider"></div>
                                        <div class="customer-action d-flex">
                                            <a href="#" class="dropdown-item font-weight-bold">
                                                {{trans('language.profile')}}
                                            </a>
                                            <a href="#"
                                                class="dropdown-item font-weight-bold ml-3"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"
                                                >
                                                {{trans('language.logout')}}
                                                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                                                <!-- <span class="float-right text-muted text-sm"></span> -->
                                                <form id="logout-form" action="{{route('customer.logout')}}" method="post">
                                                    @csrf
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-end -->

    <!-- menu-area -->
    <div id="sticky-header" class="main-header menu-area">
        <div class="custom-container-two">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{ route('site.home')}}">
                                    <img src="{{ asset('images/main-logo-edited.png')}}" class="logo-img" alt="Logo">
                                    <span class="shop-name">V SHOP</span>
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active dropdown"><a href="{{ route('site.home') }}">{{ trans('language.home') }}</a>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('site.product.index') }}">SHOP</a>
                                        {{-- <ul class="submenu">
                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li><a href="special.html">SPECIAL</a></li>
                                    <li><a href="contact.html">contacts</a></li> --}}
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li><a href="#"><i class="flaticon-two-arrows"></i></a></li>
                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                    <li class="header-shop-cart"><a href="{{ route('customer.cart.index') }}"><i class="flaticon-shopping-bag"></i><span class="cart-count">2</span></a>
                                        @if($globalCustomer)
                                        <span class="cart-total-price">$ 128.00</span>
                                            <ul class="minicart">
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/cart_p01.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4>
                                                            <a href="#">Charity Nike Brand Yellow T-Shirt</a>
                                                        </h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span>
                                                                <del>$229.9</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/cart_p02.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4>
                                                            <a href="#">BackPack For School Student</a>
                                                        </h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span>
                                                                <del>$229.9</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">$239.9</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="#">Shopping Cart</a>
                                                        <a class="red-color" href="#">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/main-logo-edited.png')}}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area-end -->

    <!-- header-search-area -->
    @include('frontend.layouts.search')
    <!-- header-search-area-end -->

</header>
<!-- header-area-end -->