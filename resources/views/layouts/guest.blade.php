<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @include('includes.style')
        <!-- Scripts -->
        @include('includes.script')
    </head>
    <body>
        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12 d-flex justify-content-center align-items-center">
                    @yield('content')
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right" class="d-flex justify-content-center align-items-center">
                        <div>
                            <img src="{{ asset('images/assets/logo-skylo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
