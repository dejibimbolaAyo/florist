@extends('layouts.unauthorized')
@section('title', 'Login')
@section('content')
<div class="login-logo">
    <a href="{{ headless_url('/') }}"><img src="{{asset('assets/dashboard/images/logo.png')}}" alt="" /></a>
</div>
<h2 class="form-heading">login</h2>
<div class="app-cam">
    <form method="post" action="{{ headless_url('login') }}">
        {{ csrf_field() }}
        <!-- TODO: Implement front end validation with JS and HTML validation -->
        <input type="text" class="text" name="email" value="{{ Input::old('email') }}" required>
        <input type="password" name="password" required>
        <input type="checkbox" id="checkbox-1-3" name="remember_me"
            value="{{Input::old('remember_me')? Input::old('remember_me') : 1}}"><label for="checkbox-1-3">Remember
            me</label>
        <div class="submit">
            <button class="btn btn-lg btn-success1 btn-block" type="submit">Login</button>
        </div>
        <ul class="new">
            <li class="new_left">
                <p><a href="#">Forgot Password ?</a></p>
            </li>
            <li class="new_right">
                <p class="sign">New here ?<a href="{{ headless_url('register') }}"> Sign Up</a></p>
            </li>
        </ul>
        <div class="clearfix"></div>
    </form>
</div>
<div class="copy_layout login">
    <p>Copyright &copy; 2019 Flower Central. All Rights Reserved</p>
</div>
@stop
