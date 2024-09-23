<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/styles.min.css') }}">
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('Super-Admin.layouts.partials.aside')
        <div class="body-wrapper">
            @include('Super-Admin.layouts.partials.navbar')
            <div class="container-fluid">
                @yield('content')
                @include('Super-Admin.layouts.partials.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dashboard/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/apexcharts/dist/apexcharts.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
