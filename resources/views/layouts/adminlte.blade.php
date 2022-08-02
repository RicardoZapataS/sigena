<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGENA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/dist/css/adminlte.min.css') }}">
    <!-- Personalized style -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('assets/img/logo_naabol.jpeg')}}" alt="Naabol logo" height="100">
    </div>

    @include('layouts.components.navbar.navbar')

    <!-- Main Sidebar Container -->
    @include('layouts.components.sidebar.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@if(!empty(Auth::current_area()))
                                {{ Auth::current_area()->name }}
                            @endif</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if(!empty(Auth::current_area()))
                                @if(empty(Auth::current_area()->routeModule) )
                                    <li class="breadcrumb-item active">{{ Auth::current_area()->name }}</li>
                                @else

                                    <li class="breadcrumb-item"><a href="{{ route(Auth::current_area()->routeModule->route_name) }}"> {{ Auth::current_area()->routeModule->name }}</a></li>
                                    <li class="breadcrumb-item active">{{ Auth::current_area()->name }}</li>
                                @endif
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('content')
            @include('layouts.flash_message')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/plugins/dist/js/adminlte.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script>
    $(document).ready(function(){
            $('.toast').toast('show');
    });
</script>
@yield('js')
</body>

</html>
