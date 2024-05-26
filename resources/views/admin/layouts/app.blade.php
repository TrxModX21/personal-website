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
    
    {{-- <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('admin.components.header')

        <div class="page-body-wrapper">
            @include('admin.components.sidebar')

            <div class="page-body">
                @yield('panel')
            </div>

            @include('admin.components.footer')
        </div>
    </div> --}}
@endsection
