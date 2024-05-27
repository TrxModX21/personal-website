<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $general->siteName($pageTitle ?? '') }}</title>
    <title>{{ $pageTitle }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ getImage(getFilePath('logoIcon') . '/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/feather-icon.css') }}">

    @stack('style-lib')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/responsive.css') }}">

    @stack('style')
</head>

<body>
    @yield('content')

    @routes
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/icons/feather-icon/feather-icon.js') }}"></script>

    @include('includes.notify')
    @stack('script-lib')

    <script src="{{ asset('assets/admin/js/config.js') }}"></script>
    <script src="{{ asset('assets/admin/js/script.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    @stack('script')
</body>

</html>
