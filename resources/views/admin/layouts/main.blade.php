<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Cadaskertajaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <link href="https://karawangkab.go.id/sites/default/files/krw-icon.png" rel="shortcut icon">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        @include('admin.layouts.nav')
        <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.sidebar')
            @yield('contentAdmin')
        </div>
    </div>

    <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>

</body>

</html>
