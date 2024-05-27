@extends('admin.layouts.app')

@section('panel')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header border-t-info">
                        <h4>{{ __($pageTitle) }}</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.settings.general.update') }}" method="POST">
                            @csrf

                            <div class="row">
                                {{-- SITE NAME --}}
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <div class="col-md-3 col-sm-4 d-flex align-items-center">
                                            <label for="site_name" class="required"> @lang('Site Title')</label>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <input class="form-control" type="text" name="site_name" id="site_name"
                                                required value="{{ @$general->site_name }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- TIMEZONE --}}
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <div class="col-md-3 col-sm-4 d-flex align-items-center">
                                            <label for="timezone" class="required"> @lang('Timezone')</label>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <select class="form-select" name="timezone" id="timezone" required>
                                                @foreach ($timezones as $timezone)
                                                    <option value="'{{ @$timezone }}'">{{ __($timezone) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- BASE COLOR --}}
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <div class="col-md-3 col-sm-4 d-flex align-items-center">
                                            <label for="base_color" class="required"> @lang('Theme Base Color')</label>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-text p-0 border-0">
                                                    <input type='text' class="form-control colorPicker"
                                                        value="{{ @$general->base_color }}" />
                                                </span>
                                                <input type="text" class="form-control colorCode" name="base_color"
                                                    id="base_color" value="{{ @$general->base_color }}"
                                                    style="border-left: none" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- SECONDARY COLOR --}}
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <div class="col-md-3 col-sm-4 d-flex align-items-center">
                                            <label for="secondary_color" class="required"> @lang('Theme Secondary Color')</label>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-text p-0 border-0">
                                                    <input type='text' class="form-control colorPicker"
                                                        value="{{ @$general->secondary_color }}" />
                                                </span>
                                                <input type="text" class="form-control colorCode" name="secondary_color"
                                                    id="secondary_color" value="{{ @$general->secondary_color }}"
                                                    style="border-left: none" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-end">
                                        <button type="submit" class="btn btn-primary">@lang('Simpan')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/spectrum.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/spectrum.js') }}"></script>
@endpush

@push('script')
    <script>
        (function($) {
            "use strict";

            $('.colorPicker').spectrum({
                color: $(this).data('color'),
                change: function(color) {
                    $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
                }
            });

            $('.colorCode').on('input', function() {
                var clr = $(this).val();
                $(this).parents('.input-group').find('.colorPicker').spectrum({
                    color: clr,
                });
            });

            $('select[name=timezone]').val("'{{ config('app.timezone') }}'").select2({
                dropdownParent: $('.card-body')
            });
        })(jQuery)
    </script>
@endpush
