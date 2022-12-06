<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--  --}}

    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}"/>
    @livewireStyles
</head>
<body>
    <div class="container-scroller">
        @include('layouts.include.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.include.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
              
        </div>
    </div>
    

    <script src="{{asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/data-table.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap4.js')}}"></script>

    @livewireScripts
</body>
</html>