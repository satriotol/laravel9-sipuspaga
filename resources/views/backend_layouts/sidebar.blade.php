<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('backend_assets/images/LambangSemarang.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/LambangSemarang.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/LambangSemarang.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/LambangSemarang.png') }}" style="width:2rem"
                    class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                @canany(['konsultasiCategory-index', 'konsultasi-index'])
                    <li class="sub-category">
                        <h3>Konsultasi</h3>
                    </li>
                @endcan
                @can('konsultasi-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['konsultasi.*']) }}"
                            href="{{ route('konsultasi.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Konsultasi</span></a>
                    </li>
                @endcan
                @can('user-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['user.*']) }}" href="{{ route('user.pelapor') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Pelapor</span></a>
                    </li>
                @endcan
                @can('konsultasiCategory-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['konsultasiCategory.*']) }}"
                            href="{{ route('konsultasiCategory.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Kategori</span></a>
                    </li>
                @endcan
                @can('network-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['network.*']) }}"
                            href="{{ route('network.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Jejaring</span></a>
                    </li>
                @endcan
                @can('status-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['status.*']) }}" href="{{ route('status.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Status</span></a>
                    </li>
                @endcan
                @canany(['beritaCategory-index'])
                    <li class="sub-category">
                        <h3>Berita</h3>
                    </li>
                @endcan
                @can('beritaCategory-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['beritaCategory.*']) }}"
                            href="{{ route('beritaCategory.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Kategori</span></a>
                    </li>
                @endcan
                @can('berita-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['berita.*']) }}" href="{{ route('berita.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Berita</span></a>
                    </li>
                @endcan
                @can('ebook-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['ebook.*']) }}" href="{{ route('ebook.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">E-Book</span></a>
                    </li>
                @endcan
                @canany(['gallery-index'])
                    <li class="sub-category">
                        <h3>Galeri</h3>
                    </li>
                @endcan
                @can('gallery-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['gallery.*']) }}"
                            href="{{ route('gallery.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Galeri</span></a>
                    </li>
                @endcan
                @canany(['slider-index', 'link-index', 'contact-index'])
                    <li class="sub-category">
                        <h3>Master</h3>
                    </li>
                @endcan
                @can('setting-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['setting.*']) }}"
                            href="{{ route('setting.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Setting</span></a>
                    </li>
                @endcan
                @can('slider-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['slider.*']) }}" href="{{ route('slider.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Slider</span></a>
                    </li>
                @endcan
                @can('page-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['page.*']) }}" href="{{ route('page.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Halaman</span></a>
                    </li>
                @endcan
                @can('link-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['link.*']) }}" href="{{ route('link.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Link</span></a>
                    </li>
                @endcan
                @can('contact-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['contact.*']) }}"
                            href="{{ route('contact.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Kontak</span></a>
                    </li>
                @endcan
                @canany(['user-index', 'role-index', 'permission-index'])
                    <li class="sub-category">
                        <h3>User Management</h3>
                    </li>
                @endcan
                @can('crud-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['crud.*']) }}" href="{{ route('crud.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">CRUD</span></a>
                    </li>
                @endcan
                @can('user-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['user.*']) }}" href="{{ route('user.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">User</span></a>
                    </li>
                @endcan
                @can('role-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['role.*']) }}" href="{{ route('role.index') }}"><i
                                class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Role</span></a>
                    </li>
                @endcan
                @can('permission-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['permission.*']) }}"
                            href="{{ route('permission.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Permission</span></a>
                    </li>
                @endcan
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
