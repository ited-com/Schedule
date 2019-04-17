<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
         <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href=" {{asset('fonts/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/custom.css')}}">

        <!-- Styles -->
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <div class="wrapper">
            {{-- header --}}
            @include('inc.header')
            {{-- slidebar --}}
            @include('inc.slidebar')
        <div class="content-wrapper">

            <section class="content-header">
                @yield('content')
            </section>

        </div>
            {{-- footer --}}
            @include('inc.footer')
            {{-- black slidebar --}}
            @include('inc.controlsidebar')
        </div>
        <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- SlimScroll -->
        <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/app.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}"></script>
        <script src="{{asset('bootstrap/js/custom.js')}}"></script>
    </body>
</html>