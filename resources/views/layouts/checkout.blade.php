<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>@yield('title')</title>
            @stack('prepend-style')
            @include('includes.frontpage.style')
            @stack('addon-style')
    </head>

    <body>
        @include('includes.frontpage.navbar-alternate')

        @yield('content')

        @include('includes.frontpage.footer')


        @stack('prepend-script')
        @include('includes.frontpage.script')
        @stack('addon-script')
    </body>
</html>