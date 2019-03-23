<!DOCTYPE html>
<html>

<head>
    <title>Floral - @yield('title')</title>
    @include('includes.dashboard.head')
</head>

<body>
    <div id="wrapper">
        <!-- Nav -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.dashboard.navbar')
            @include('includes.dashboard.sidemenu')
        </nav>
        <!-- Nav -->
        <div id="page-wrapper">
            @include('includes.front.alerts')
            @yield('content')
        </div>
    </div>
    @include('includes.dashboard.footerscripts')

</body>

</html>
