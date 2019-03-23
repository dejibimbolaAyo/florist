<!DOCTYPE html>
<html>
    <head>
        <title>Floral - @yield('title')</title>
        @include('includes.front.head')
        @include('includes.front.modal')
    </head>
    <body>
        <div class="container" style="position:absolute; left: 10%; text-align: center">
            @include('includes.front.alerts')
        </div>
        @yield('content')

        @include('includes.front.contact')
        @include('includes.front.subscription')
        @include('includes.front.footerscripts')
    </body>
</html>
