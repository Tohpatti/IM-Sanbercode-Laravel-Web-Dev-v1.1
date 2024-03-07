<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/templates/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/templates/dist/css/adminlte.min.css">
    <!-- Data Table Style -->
    @stack('data_table_style')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('partials.navbar'  )

    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        
        @yield('table-content')
        {{-- @include('layouts.simple-tables') --}}

    </div>
    <!-- /.content-wrapper -->

    @include('partials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@stack('data_table_scripts')

<!-- jQuery -->
<script src="templates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="templates/dist/js/demo.js"></script>
</body>
</html>
