<div class="breadcrumb-area pt-100 pb-100"
    style="background-image:url(https://inspektorat.semarangkota.go.id/public/uploads/file/12172022105115-banner.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>{{ $mainTitle }}</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('home.index') }}">Beranda</a></li>
                        @empty($subTitle)
                            <li><span>{{ $mainTitle }}</span></li>
                        @endempty
                        @isset($subTitle)
                            <li><a href="{{ route($route) }}">{{ $mainTitle }}</a></li>
                            <li><span>{{ $subTitle }}</span></li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
