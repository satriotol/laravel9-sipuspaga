<header>
    <div id="sticky-header" class="main-menu-area menu-padding pl-55 pr-55">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3">
                    <div class="header-left mr-40">
                        <div class="logo logo-mt f-left">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('uploads/' . $setting->image) }}" alt="" />
                            </a>
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
                    </div>
                    <div class="main-menu text-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ active_class(['home.index']) }}">
                                    <a href="{{ route('home.index') }}">Beranda</a>
                                </li>
                                <li class="{{ active_class(['berita', 'detailBerita']) }}">
                                    <a href="{{ route('berita') }}">Berita</a>
                                </li>
                                <li class="{{ active_class(['ebook']) }}">
                                    <a href="{{ route('ebook') }}">E-Book</a>
                                </li>
                                <li class="{{ active_class(['galeri', 'detailGaleri']) }}">
                                    <a href="{{ route('galeri') }}">Galeri</a>
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
</header>
