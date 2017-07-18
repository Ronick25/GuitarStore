@extends('layouts.page')

@section('content')
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Login</h3>
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="key{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input  id="email" type="text" name="email" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="key{{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="password" type="password" name="password" required placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <div class="clearfix"></div>   
                </div>
                <input type="submit" value="Login">
            </form>
        </div>  
        <div class="forg">
            <a href="{{ route('password.request') }}" class="forg-left">Forgot Password</a>
            <a href="{{ route('register') }}" class="forg-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>  
@endsection

