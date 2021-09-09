<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
    <link rel="stylesheet" href="{{asset('assets/bundles/toastr/toastr.min.css')}}">
    @yield('style')
</head>

<body>
    <div class="loader"></div>
    <div id="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <x-admin.header-component></x-admin.header-component>
            <div class="main-sidebar sidebar-style-2">
                <x-admin.sidebar-component></x-admin.sidebar-component>
            </div>

            <div class="main-content">
                <section class="section">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title m-b-0">Admin</h4>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">{{ $page }}</li>
                    </ul>

                    @yield('content')
                </section>
            </div> 
        </div>
        <x-admin.footer-component></x-admin.footer-component>
    </div>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/bundles/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/toastr/evolution.js') }}"></script> 
    <script src="{{asset('assets/bundles/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/bundles/sweetalert/evolution.js')}}"></script>
    @yield('scripts')
    
</body>

</html>
