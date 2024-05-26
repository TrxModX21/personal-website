<div class="sidebar-wrapper" data-layout="stroke-svg" style="z-index: 20">
    <div>

        <div class="logo-wrapper">
            <a href="index.html">
                <img class="img-fluid" src="{{ getImage(getFilePath('logoIcon') . '/logoWithText.png') }}"
                    alt="@lang('Gambar')">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('assets/admin/svg/icon-sprite.svg#toggle-icon') }}"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-toggle-icon') }}"></use>
                </svg>
            </div>
        </div>

        <div class="logo-icon-wrapper">
            <a href="index.html">
                <img class="img-fluid" src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}"
                    alt="@lang('Gambar')">
            </a>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="index.html">
                            <img class="img-fluid" src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}"
                                alt="@lang('Gambar')">
                        </a>
                        <div class="mobile-back text-end">
                            <span>@lang('Kembali')</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>@lang('Pin Menu')</h6>
                        </div>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Dashboard')</h6>
                        </div>
                    </li>
                    {{-- DASHBOARD SECTION --}}
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg>
                            <span>@lang('Dashboard')</span>
                        </a>
                    </li>

                    {{-- USERS MANAGEMENT SECTION --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Managemen Admin Kabupaten')</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.staff.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg>
                            <span>@lang('Admin Kabupaten')</span>
                        </a>
                    </li>

                    {{-- CONTENT MANAGEMENT --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Konten Management')</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="fa fa-institution text-light"></i>
                            <span>@lang('Managemen Wilayah')</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('admin.district.index') }}">@lang('Kabupaten/Kota')</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.kecamatan.index') }}">@lang('Kecamatan')</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.desa.index') }}">@lang('Desa')</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="fa fa-sitemap text-light"></i>
                            <span>@lang('Managemen Kategori')</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('admin.category.index') }}">@lang('Kategori Cagar')</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category.article.index') }}">@lang('Kategori Berita')</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.cagar.index') }}">
                            <i class="fa fa-fort-awesome text-light"></i>
                            <span>@lang('Cagar Budaya')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.object.index') }}">
                            <i class="fa fa-fort-awesome text-light"></i>
                            <span>@lang('Objek Budaya')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.article.index') }}">
                            <i class="fa fa-hacker-news text-light"></i>
                            <span>@lang('Managemen Berita')</span>
                        </a>
                    </li>

                    {{-- WEBSITE MANAGEMENT SECTION --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Website Management')</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ menuActive('admin.frontend.manage.*') }}"
                            href="{{ route('admin.frontend.manage.pages.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-layout') }}"></use>
                            </svg>
                            <span>@lang('Halaman')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-animation') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-animation') }}"></use>
                            </svg>
                            <span>@lang('Component Halaman')</span>
                        </a>
                        <ul class="sidebar-submenu">
                            @php
                                $lastSegment = collect(request()->segments())->last();
                            @endphp
                            @foreach (getPageSections(true) as $k => $secs)
                                @if ($secs['builder'])
                                    <li>
                                        <a
                                            href="{{ route('admin.frontend.sections.index', $k) }}">{{ __($secs['name']) }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.seo') }}">
                            <i class="fa fa-diagram-project text-light"></i>
                            <span>@lang('SEO')</span>
                        </a>
                    </li>

                    {{-- REPORT SECTION --}}
                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Report')</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg>
                            <span>@lang('Login Activities')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#notification') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#notification') }}"></use>
                            </svg>
                            <span>@lang('Notifications')</span>
                        </a>
                    </li> --}}

                    {{-- GENERAL SETTINGS SECTION --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>@lang('Pengaturan Website')</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.setting.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-knowledgebase') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                            </svg>
                            <span>@lang('Pengaturan Global')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.setting.logo.icon') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-gallery') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-gallery') }}"></use>
                            </svg>
                            <span>@lang('Logo & Favicon')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.languages.index') }}">
                            <i class="fa fa-language text-light"></i>
                            <span>@lang('Bahasa')</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#fill-email') }}"></use>
                            </svg>
                            <span>@lang('Email & Notifikasi')</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.setting.notification.email.index') }}">@lang('Konfigurasi Email')</a>
                            </li>
                            <li><a href="projectcreate.html">Create new</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
