<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Sistema de Estudiantes')</title>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- ==========================
            NAVBAR
    =========================== -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Botón Sidebar -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">

                <span class="nav-link text-secondary">

                    <i class="fas fa-user-circle"></i>

                    Sistema de Gestión

                </span>

            </li>

        </ul>

    </nav>

    <!-- ==========================
            SIDEBAR
    =========================== -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Logo -->

        <a href="{{ url('/') }}" class="brand-link">

            <img src="{{ asset('dist/img/AdminLTELogo.png') }}"
                class="brand-image img-circle elevation-3"
                style="opacity:.8">

            <span class="brand-text font-weight-light">

                Estudiantes CRUD

            </span>

        </a>

        <!-- Sidebar -->

<div class="sidebar">

    <nav class="mt-3">

        <ul class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu">

            <li class="nav-item">

                <a href="{{ url('/') }}"
                   class="nav-link {{ request()->is('/') ? 'active' : '' }}">

                    <i class="nav-icon fas fa-home"></i>

                    <p>Inicio</p>

                </a>

            </li>

            <li class="nav-item">

                <a href="{{ route('estudiantes.index') }}"
                   class="nav-link {{ request()->is('estudiantes') ? 'active' : '' }}">

                    <i class="nav-icon fas fa-user-graduate"></i>

                    <p>Estudiantes</p>

                </a>

            </li>

            <li class="nav-item">

                <a href="{{ route('estudiantes.create') }}"
                   class="nav-link {{ request()->is('estudiantes/create') ? 'active' : '' }}">

                    <i class="nav-icon fas fa-user-plus"></i>

                    <p>Nuevo Estudiante</p>

                </a>

            </li>

        </ul>

    </nav>

</div>

</aside>

    <!-- ==========================
        CONTENT
    =========================== -->

    <div class="content-wrapper">

        <section class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1>

                            @yield('titulo')

                        </h1>

                    </div>

                </div>

            </div>

        </section>

        <section class="content">

            <div class="container-fluid">
                              @yield('content')

            </div>

        </section>

    </div>

    <!-- Footer -->

    <footer class="main-footer">

        <strong>

            Sistema CRUD Estudiantes © {{ date('Y') }}

        </strong>

        <div class="float-right d-none d-sm-inline-block">

            <b>Laravel 12</b>

        </div>

    </footer>

</div>

<!-- jQuery -->

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@stack('scripts')

</body>

</html>