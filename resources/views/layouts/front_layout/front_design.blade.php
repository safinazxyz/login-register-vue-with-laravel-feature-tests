<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf_token()" content="{{ csrf_token() }}">
    <title>TheSaaS - Responsive Bootstrap SaaS, Software & WebApp Template</title>

{{--    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />--}}
    <!-- Styles -->
    <link href="{{ asset('theme/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/meteor.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('theme/assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('theme/assets/img/favicon.png') }}">

</head>

<body>
<div id="app">
    <div id="wrapper">
    <!-- start header -->
    @include('layouts.front_layout.front_header')
    <!-- end header -->

    <!-- start content -->
    @yield('content')
    @if(!auth()->check())
        <vue-login></vue-login>
     @endif
    <!-- end content -->

    <!-- start footer -->
    @include('layouts.front_layout.front_footer')
    <!-- end footer -->
    </div>
</div>
</body>
<script defer src="{{ asset('js/app.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('theme/assets/js/core.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/thesaas.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/script.js') }}"></script>
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 'openModal')
    <script>
        $(function() {
            $('#LoginModal').modal('show');
        });
    </script>
@endif
</html>
