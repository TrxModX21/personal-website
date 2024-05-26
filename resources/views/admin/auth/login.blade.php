@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/general/3.jpg') }}"
                    alt="looginpage">
            </div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo text-start" href="index.html">
                                <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage">
                                <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png"
                                    alt="looginpage"></a>
                        </div>

                        <div class="login-main">
                            <form class="theme-form" action="{{ route('admin.login') }}" method="POST">
                                @csrf

                                <h4>{{ __($pageTitle) }}</h4>
                                <p>@lang('Enter your username & password to login')</p>

                                <div class="form-group">
                                    <label class="col-form-label" for="username">@lang('Username')</label>
                                    <input class="form-control" type="text" id="username" name="username"
                                        placeholder="admin" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="password">@lang('Password')</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" id="password" type="password" name="password" required
                                            placeholder="*********">
                                        <div class="show-hide">
                                            <span class="show"> </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="remember" name="remember" type="checkbox">
                                        <label class="text-muted" for="remember">@lang('Remember me')</label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function($) {
            "use strict";

            $('.show-hide').show();
            $('.show-hide span').addClass('show');

            $('.show-hide span').click(function() {
                if ($(this).hasClass('show') && $('input[id="password"]')) {
                    $('input[id="password"]').attr('type', 'text');
                    $(this).removeClass('show');
                } else {
                    $('input[id="password"]').attr('type', 'password');
                    $(this).addClass('show');
                }
            });
            $('form button[type="submit"]').on('click', function() {
                $('.show-hide span').text('Show').addClass('show');
                $('.show-hide').parent().find('input[id="password"]').attr('type', 'password');
            });

        })(jQuery);
    </script>
@endpush
