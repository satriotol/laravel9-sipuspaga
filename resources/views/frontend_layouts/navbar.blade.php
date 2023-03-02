<header>
    <div id="sticky-header" class="main-menu-area menu-padding pl-55 pr-55">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3">
                    <div class="header-left mr-40">
                        <div class="logo logo-mt f-left">
                            <a href="#"><img src="{{ asset('frontend_assets/img/logo/logopuspaga.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="header-right f-right d-none d-lg-block">
                        <div class="header-info f-right">
                            <span><i class="far fa-phone"></i>{{ $contactPhone->description }} </span>
                        </div>
                        <div class="header-right-img f-right">
                            <img src="{{ asset('frontend_assets/img/shape/line-1.png') }}" alt="">
                        </div>
                        {{-- <div class="search-icon f-right d-none d-lg-block">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i
                                        class="far fa-search"></i></a>
                            </div> --}}
                    </div>
                    <div class="main-menu text-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ active_class(['home.index']) }}"><a
                                        href="{{ route('home.index') }}">Beranda</a>
                                </li>
                                <li class="{{ active_class(['berita']) }}"><a href="{{ route('berita') }}">Berita</a>
                                </li>
                                <li><a href="{{ route('dashboard') }}" target="_blank"
                                        style="margin-right: 20px;">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="#">
                <img src="{{ asset('frontend_assets/img/logo/white.png') }}" alt="" />
            </a>
        </div>
        <div class="instagram">
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p1.jpg') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p2.jpg') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p3.jpg') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p4.jpg') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p5.jpg') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('frontend_assets/img/portfolio/p6.jpg') }}" alt="">
            </a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</header>
