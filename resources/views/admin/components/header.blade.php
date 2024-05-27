<div class="page-header row">

    @include('admin.components.breadcrumb')

    <!-- Page Header Start-->
    <div class="header-wrapper col m-0">
        <div class="row">

            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Search Mofi .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>

            <div class="header-logo-wrapper col-auto p-0">
                <div class="toggle-sidebar">
                    <svg class="stroke-icon sidebar-toggle status_toggle middle">
                        <use href="{{ asset('assets/admin/svg/icon-sprite.svg#toggle-icon') }}"></use>
                    </svg>
                </div>
            </div>

            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li>
                        <span class="header-search">
                            <svg>
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#search') }}"></use>
                            </svg>
                        </span>
                    </li>
                    <li>
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative d-flex align-items-center">
                                    <svg class="search-bg svg-color">
                                        <use href="{{ asset('assets/admin/svg/icon-sprite.svg#search') }}"></use>
                                    </svg>
                                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="@lang('Cari Menu...')" name="q" title="">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div>
                            <a href="{{ route('home') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="@lang('Kunjungi Website')" target="_blank">
                                <i data-feather="globe"> </i>
                            </a>
                        </div>
                    </li>

                    {{-- <li class="onhover-dropdown">
                        <div class="notification-box">
                            <svg>
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#notification') }}"></use>
                            </svg>
                            <span class="badge rounded-pill badge-primary">4 </span>
                        </div>

                        <div class="onhover-show-div notification-dropdown">
                            <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notitications </h5>
                            <ul class="notification-box">
                                <li class="d-flex">
                                    <div class="flex-shrink-0 bg-light-primary"><img src="" alt="Wallet">
                                    </div>
                                    <div class="flex-grow-1"> <a href="private-chat.html">
                                            <h6>New daily offer added</h6>
                                        </a>
                                        <p>New user-only offer added</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0 bg-light-info"><img src="" alt="Shield-dne">
                                    </div>
                                    <div class="flex-grow-1"> <a href="private-chat.html">
                                            <h6>Product Evaluation</h6>
                                        </a>
                                        <p>Changed to a new workflow</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0 bg-light-warning"><img src="" alt="Graph">
                                    </div>
                                    <div class="flex-grow-1"> <a href="private-chat.html">
                                            <h6>Return of a Product</h6>
                                        </a>
                                        <p>452 items were returned</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0 bg-light-tertiary"><img src="" alt="Ticket-star">
                                    </div>
                                    <div class="flex-grow-1"> <a href="private-chat.html">
                                            <h6>Recently Paid</h6>
                                        </a>
                                        <p>Mastercard payment of $343</p>
                                    </div>
                                </li>
                                <li><a class="f-w-700" href="private-chat.html">Check all </a></li>
                            </ul>
                        </div>
                    </li> --}}

                    <li>
                        <div class="mode">
                            <svg>
                                <use href="{{ asset('assets/admin/svg/icon-sprite.svg#moon') }}"></use>
                            </svg>
                        </div>
                    </li>

                    <li class="profile-nav onhover-dropdown px-0 py-0">
                        <div class="d-flex profile-media align-items-center">
                            <img class="img-50 rounded-circle"
                                src="{{ getImage(getFilePath('adminProfile') . '/' . auth()->guard('admin')->user()->image) }}"
                                alt="@lang('Image')">
                            <div class="flex-grow-1">
                                <span>
                                    {{ auth()->guard('admin')->user()->username }}
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="{{ route('admin.profile.index') }}">
                                    <i data-feather="user"></i>
                                    <span>@lang('Profil')</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.logout') }}">
                                    <i data-feather="log-in"> </i>
                                    <span>@lang('Logout')</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
