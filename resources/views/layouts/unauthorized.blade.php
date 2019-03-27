<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Floral - @yield('title')</title>
    @include('includes.dashboard.head')
</head>

<body id="login">
    @yield('content')
    @include('includes.dashboard.footerscripts')
</body>

</html>
