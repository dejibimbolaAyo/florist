@extends('layouts.unauthorized')
@section('title', 'Login')
@section('content')
<div class="login-logo">
    <a href="{{ headless_url('/') }}"><img src="{{asset('assets/dashboard/images/logo.png')}}" alt="" /></a>
</div>
<h2 class="form-heading">Admin Secret Registration Form</h2>
<form class="form-signin app-cam" action="{{ headless_url('register') }}" method="POST">
    {{ csrf_field() }}
    <p>Enter details below</p>
    <input type="text" class="form-control1" placeholder="Full Name" name="name" autofocus required>
    <input type="text" class="form-control1" placeholder="Address" name="address" required>
    <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" checked="" id="radio-01" name="gender" value="M" required> Male
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio" name="gender" id="radio-02" value="F" required> Female
        </label>
    </div>
    <input hidden name="role_id" value="{{Config::get('constants.role.admin')}}"/>
    <p> Enter account details below</p>
    <input type="text" class="form-control1" placeholder="Email" name="email" required>
    <input type="password" class="form-control1" placeholder="Password" name="password" required>
    <input type="password" class="form-control1" placeholder="Re-type Password" name="password_confirmation" required>
    <span class="checkbox-custom check-success">
        <input type="checkbox" value="true" name="terms" id="checkbox1"> <label for="checkbox1">I agree to the Terms
            of Service and Privacy Policy</label>
    </span>
    <button class="btn btn-lg btn-success1 btn-block" type="submit">Register</button>
    <div class="registration">
        Already Registered.
        <a class="" href="{{ headless_url('login') }}">
            Login
        </a>
    </div>
    <div class="registration">
        Register as a customer?
        <a class="" href="{{ headless_url('register') }}">
            Customer Registration &nbsp;&nbsp;<span class="fa fa-chevron-right"></span>
        </a>
    </div>
</form>
<div class="copy_layout login register">
    <p>Copyright &copy; 2019 Flower Central. All Rights Reserved</p>
</div>
@stop
