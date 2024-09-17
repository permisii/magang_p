<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pakerin Maintenance</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition login-page text-sm">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                <span class="text-bold">Daily</span><span style="font-weight: 100">Operation</span>
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="card rounded rounded-lg">
            <div class="card-body login-card-body container-fluid">
                <img class="text-center d-block justify-content-center py-3 mx-auto w-75"
                    src="{{ asset('dist/img/pakerin.svg') }}">
                <form action="{{ route('pages.dashboard') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" value="userdemo@pakerin.co.id">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" value="782937429374">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <a href="{{ route('pages.dashboard') }}" class="btn btn-primary btn-block">Sign In</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1 mt-4 ">
                    Lupa Password? Hub. Bengkel Komputer Depan
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
