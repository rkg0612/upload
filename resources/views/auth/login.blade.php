<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Helmet Detection Login</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('media/favicons/favicon.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicons/favicon.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('css/dashmix.css')}}">
    </head>
    <body>
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="row no-gutters justify-content-center bg-body-dark">
                    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                        <!-- Sign In Block -->
                        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('media/photos/1.png');">
                            <div class="row no-gutters">
                                <div class="col-md-6 order-md-1 bg-white">
                                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                        <!-- Header -->
                                        <div class="mb-2 text-center">
                                            <a class="link-fx font-w700 font-size-h1" href="javascript:void(0);">
                                                <span class="text-dark">Helmet Detection</span><span class="text-primary"> System</span>
                                            </a>
                                            <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                                        </div>
                                        <!-- END Header -->

                                        <!-- Sign In Form -->
                                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alt" id="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-alt" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-hero-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                </button>
                                            </div>
                                        </form>
                                        <!-- END Sign In Form -->
                                    </div>
                                </div>
                                <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                        <div class="media">
                                            <a class="img-link mr-3" href="javascript:void(0)">
                                                <img class="img-avatar img-avatar-thumb" src="media/favicons/favicon.png" alt="">
                                            </a>
                                            <div class="media-body">
                                                <p class="text-white font-w600 mb-1">
                                                    {{ \Illuminate\Foundation\Inspiring::quote() }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <script src="{{asset('js/dashmix.core.min.js')}}"></script>
        <script src="{{asset('js/dashmix.app.min.js')}}"></script>
        <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('js/pages/op_auth_signin.min.js')}}"></script>
        <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
        @include('partials.app._notify')
    </body>
</html>