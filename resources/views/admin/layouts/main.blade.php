<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.meta')
    @yield('style')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.layouts.script')
    @yield('scripts')
</body>

</html>
