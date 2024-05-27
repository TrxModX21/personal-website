@extends('admin.layouts.app')

@section('panel')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header border-t-info">
                        <h4>@lang('Profile Information')</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="image-upload">
                                            <div class="thumb">
                                                <div class="avatar-preview">
                                                    <div class="profilePicPreview"
                                                        style="background-image: url({{ getImage(getFilePath('adminProfile') . '/' . $admin->image, getFileSize('adminProfile')) }})">
                                                        <button type="button"
                                                            class="remove-image rounded-circle bg-warning"
                                                            data-img="{{ getImage(getFilePath('adminProfile') . '/' . $admin->image, getFileSize('adminProfile')) }}">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input type="file" class="profilePicUpload" name="image"
                                                        id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                    <small class="mt-2">
                                                        @lang('Recommended Size: ')
                                                        <b>{{ getFileSize('adminProfile') }}</b>
                                                        @lang('px').
                                                    </small>
                                                    <label for="profilePicUpload1"
                                                        class="btn btn-info-gradien">@lang('Profile Image')</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div>
                                        <div class="form-group mb-4">
                                            <label class="required" for="name">@lang('Name')</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $admin->name }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required" for="email">@lang('Email')</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ $admin->email }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary-gradien">@lang('Save')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header border-t-info">
                        <h4>@lang('Update Password')</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.password.update') }}" method="POST">
                            @csrf

                            <div class="form-group mb-4">
                                <label class="required" for="old_password">@lang('Current Password')</label>
                                <input class="form-control" type="password" name="old_password" id="old_password" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required" for="password">@lang('New Password')</label>
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required" for="password_confirmation">@lang('Confirm Password')</label>
                                <input class="form-control" type="password" name="password_confirmation"
                                    id="password_confirmation" required>
                            </div>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary-gradien">@lang('Save')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
