@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="form-title">Register</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('family_name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="family_name" type="text" class="form-control" name="family_name" value="{{ old('family_name') }}" placeholder="Family Name">

                                @if ($errors->has('family_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="comfirm password" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_num') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="phone_num" type="number" class="form-control" name="phone_num" placeholder="phone number" required>

                                @if ($errors->has('phone_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="form-control">With registration you accept our<a href="#">privacy policy & terms & conditions</a>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn submit-button" style="width: 100%">
                                    Register
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="form-control">or registration with</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn register-facebook-button" style="width: 100%">
                                    Facebook
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn register-twitter-button" style="width: 100%">
                                    Twitter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
