@extends('admin.layouts.master')

@section('content')
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>

    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('admin.components.header')

        <div class="page-body-wrapper">
            @include('admin.components.sidebar')

            <div class="page-body">
                @yield('panel')
            </div>

            @include('admin.components.footer')
        </div>
    </div>
@endsection

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendors/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendors/animate.css') }}">
@endpush

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset('assets/admin/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scrollbar/custom.js') }}"></script>
@endpush

@push('script')
    <script src="{{ asset('assets/admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/admin/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/admin/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tooltip-init.js') }}"></script>
@endpush
