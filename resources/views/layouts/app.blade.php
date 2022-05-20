<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('sbadmin.meta')

        <title>{{ config('app.name', 'e-Cuti') }}</title>

        @stack('before-style')
        <!-- style -->
        @include('sbadmin.style')
        @stack('after-style')
    </head>
    <body class="sb-nav-fixed">
        @include('sbadmin.header')
        <div id="layoutSidenav">
            @include('sbadmin.sidebar')

            <div id="layoutSidenav_content">
                @yield('content')
                

                @include('sbadmin.footer')
            </div>
        </div>
        @stack('before-script')
        <!-- script -->
        @include('sbadmin.script')
        @stack('after-script')

    </body>
</html>
