@extends('layouts.page')

@section('content')
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Register</h3>
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="key{{ $errors->has('name') ? ' has-error' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder = "Name" required autofocus >
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="key{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="email" type="text"  name="email" value="{{ old('email') }}" placeholder = "Email" >
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="key{{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="password" type="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="key">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                    <div class="clearfix"></div>             
                </div>
                <input type="submit" value="Register">
            </form>       
        </div>
    </div>
</div>           
@endsection
