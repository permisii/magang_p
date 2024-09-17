<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>Pakerin CMMS</title> --}}
    <title>Automation Daily Operation</title>
    <link rel="icon" type="image/png" href="{{ asset('dist/img/favicons.png') }}" />



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('dist/fonts/source-sans-pro/source-sans-pro.css') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- select 2 Css-->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">


    <!-- Bootstrap Date Picker Css-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-datepicker-1.9.0/css/bootstrap-datepicker3.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    @yield('css')

    @yield('style')

    <style>
        .form-group {
            margin-bottom: .5rem;
        }

        .text-divider {
            line-height: 0;
            text-align: left;
        }

        .text-divider span {
            background-color: #17a2b8;
            padding: 0.2em 1em;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
        }

        .text-divider:before {
            content: " ";
            display: block;
            border-top: 1px dashed #e3e3e3;
            border-bottom: 1px dashed #f7f7f7;
        }

        a.nav-link p {
            text-wrap: nowrap !important;
            overflow: hidden;
        }

        table.dataTable thead tr {
            background-color: #17a2b8;
            color: #fff
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #fff !important;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: rgb(17 162 184 / 5%);
        }

        select.form-control-sm~.select2-container--default {
            font-size: 90%;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-left: 0px
        }

        .breadcrumb.nav-asset .breadcrumb-item+.breadcrumb-item::before {
            color: #6c757d;
            content: ">";
        }
        [class*=sidebar-light-] .nav-sidebar>.nav-item>.nav-link.active {
            box-shadow: none;
        }
    </style>
</head>

<body class="sidebar-mini control-sidebar-slide-open text-md layout-navbar-fixed layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('pages.dashboard') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-light-info">
            <!-- Brand Logo -->
            <a href="{{ route('pages.dashboard') }}" class="brand-link">
                <img src="{{ asset('dist/img/favicons.png') }}" alt="AdminLTE Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text"><b>Daily</b>Operation</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-1 mb-3 d-flex border-bottom-0">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-1"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">User Demo</a>
                    </div>
                </div>

                <div class="btn-group btn-block border-bottom pb-3">
                    <button onclick="alert('Go to change password page')" class="btn btn-default btn-sm"><i
                            class="fas fa-user"></i> User Profile</button>
                    <a href="{{ route('pages.login') }}" class="btn btn-default btn-sm"><i
                            class="fas fa-sign-out-alt"></i> Logout</a>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('pages.dashboard') }}"
                                class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard </p>
                            </a>
                        </li>
                        <li class="nav-header">ADMINISTRASI</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-fw fa-users"></i>
                                <p>User </p>
                            </a>
                        </li>

                        <li class="nav-header">DATA INDUK</li>
                        <li class="nav-item">
                            <a href="{{ route('master.unit.index') }}"
                                class="nav-link {{ Request::is('master/unit*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-fw fa-tags"></i>
                                <p>Unit </p>
                            </a>
                        </li>

                        <li class="nav-header">OPERASIONAL</li>
                        <li class="nav-item">
                            <a href="{{ route('operation.instruksikerja.index') }}"
                                class="nav-link {{ Request::is('operation/instruksikerja*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-fw  fa-calendar-alt"></i>
                                <p>Instruksi Kerja </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('operation.reporting.index') }}"
                                class="nav-link {{ Request::is('operation/reporting*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-fw  fa-calendar-alt"></i>
                                <p>Daily Report </p>
                            </a>
                        </li>

                        <li class="nav-header">LAPORAN</li>

                        <li class="nav-item">
                            <a href="{{ route('operation.reporting.index') }}"
                                class="nav-link {{ Request::is('laporan/pegawaibulanan*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-fw  fa-copy"></i>

                                {{-- <i class="far fa-copy"></i> --}}
                                <p>Pegawai Perbulan </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $params['title'] }} @isset($params['subtitle'])
                                    <small class="text-gray" style="font-size: 70%">| {{ $params['subtitle'] }}</small>
                                @endisset
                            </h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                @isset($params['breadcrumb'])
                                    @php $last_key = array_key_last($params['breadcrumb']); @endphp
                                    @foreach ($params['breadcrumb'] as $k => $v)
                                        {!! $k == $last_key
                                            ? '<li class="breadcrumb-item">' . $k . '</li>'
                                            : '<li class="breadcrumb-item"><a href="' . $v . '">' . $k . '</a></li>' !!}
                                    @endforeach
                                @endisset
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">(demo version)</div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y') }} <a href="https://pakerin.co.id/">PT. Pakerin</a>.</strong>
            All
            rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <!-- datepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- bootstrap datepicker -->
    <script src="{{ asset('plugins/bootstrap-datepicker-1.9.0/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- input mask -->
    <script src="{{ asset('plugins/jquery-inputmask/dist/jquery.inputmask.min.js') }}"></script>

    <!-- datepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('dist/js/global.js?rev=0') }}"></script>

    @yield('scripts')
</body>

</html>
