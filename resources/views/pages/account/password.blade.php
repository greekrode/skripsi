@extends('layouts.app')
@section('header-title',' Your Account')
@section('title', 'Your Account - Change Password')
@section('content')
    <div class="header-spacer header-spacer-small"></div>

    <!-- Main Header Account -->
    @include('include.personal-header')
    <!-- ... end Main Header Account -->



    <!-- Your Account Personal Information -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Change Password</h6>
                    </div>
                    <div class="ui-block-content">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- Change Password Form -->

                        <form method="POST" action="{{ route('account.password.update', ['id' => Auth::user()->id]) }}">
                            @csrf
                            <div class="row">
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Current Password</label>
                                        <input id="current_password" type="password" class="form-control{{ $errors->has('current_password') ? ' is-invalid' : '' }}" name="current_password" required>

                                        @if ($errors->has('current_password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('current_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">New Password</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Confirm New Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-lg full-width">Change Password Now!</button>
                                </div>

                            </div>
                        </form>

                        <!-- ... end Change Password Form -->
                    </div>
                </div>
            </div>

            @include('include.personal-sidebar')

        </div>
    </div>

    <!-- ... end Your Account Personal Information -->
@endsection
