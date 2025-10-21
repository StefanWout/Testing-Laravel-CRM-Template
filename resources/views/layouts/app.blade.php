<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Duralux CRM Admin Dashboard" />
    <meta name="keyword" content="CRM, Admin, Dashboard" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Duralux || Dashboard')</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/daterangepicker.min.css') }}" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css') }}" />
    
    @stack('styles')
</head>

<body>
    <!-- Navigation Menu -->
    @include('partials.navigation')
    
    <!-- Header -->
    @include('partials.header')
    
    <!-- Main Content -->
    <main class="nxl-container">
        <div class="nxl-content">
            @yield('content')
        </div>
    </main>
    
    <!-- Footer (if needed) -->
    @include('partials.footer')
    
    <!-- Theme Customizer -->
    @include('partials.customizer')
    
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/circle-progress.min.js') }}"></script>
    
    <!-- Apps Init -->
    <script src="{{ asset('assets/js/common-init.min.js') }}"></script>
    
    @stack('scripts')
    
    <!-- Theme Customizer -->
    <script src="{{ asset('assets/js/theme-customizer-init.min.js') }}"></script>
</body>

</html>
