{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Violators</title>
</head>
<body>
    <h1>All violators</h1>
    @if($files)
    <form action="{{ route('allDelete') }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit"><i class="fa fa-fw fa-trash" style="color: red"></i> Delete ALL</button>
    </form>
    @endif
    <ul>
    @forelse($files as $file)
        <li>
            <form action="{{ route('singleDelete', $file->getFileName()) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/uploads/{{$file->getFileName()}}" type="button"> {{$file->getFileName()}} </a>  -
            <button type="submit"><i class="fa fa-fw fa-times" style="color: red"></i> Delete</button>
            </form>
        </li>
    @empty
    <h2 style="color: orange">No violators yet!</h2>
    @endforelse
    </ul>
</body>
</html> --}}
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Violators</title>

        <meta name="description" content="Violators">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Violators">
        <meta property="og:site_name" content="DHVTSU">
        <meta property="og:description" content="Violators">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicons/apple-touch-icon-180x180.png')}}">
        
        <link rel="stylesheet" href="{{asset('js/plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('css/dashmix.min.css')}}">
    </head>
    <body>
        <div id="page-container" class="enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow">
            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-primary">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary-darker">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">

                    <!-- Advanced -->
                    <h2 class="content-heading">Violators</h2>
                    <div class="row">
                        <div class="col-md-12" id="violation-alert"></div>
                    </div>
                    <div class="row">
                        <!-- Gallery -->
                        <div class="col-md-12">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full bg-gd-primary text-center">
                                    <a class="item item-circle mx-auto bg-black-25" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-fw fa-camera text-white"></i>
                                    </a>
                                    <p class="text-white font-size-h3 font-w300 mt-3 mb-0">
                                        These are the captured images of violators
                                    </p>
                                    <p class="text-white-75 mb-0">
                                        Latest (Left) to Oldest (Right)
                                    </p>
                                </div>
                                <div class="block-content block-content-full">
                                    @if($files)
                                    <form action="{{ route('allDelete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-fw fa-trash"></i> Delete ALL</button>
                                    </form>
                                    @endif
                                    <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                    <div class="row gutters-tiny js-gallery img-fluid-100">
                                        @forelse($files as $key => $file)
                                        {{-- <li>
                                            <form action="{{ route('singleDelete', $file->getFileName()) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/uploads/{{$file->getFileName()}}" type="button"> {{$file->getFileName()}} </a>  -
                                            <button type="submit"><i class="fa fa-fw fa-times" style="color: red"></i> Delete</button>
                                            </form>
                                        </li> --}}
                                        <div class="col-md-1 col-lg-1 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" id="{{$key}}" href="/uploads/{{$file->getFileName()}}">
                                                <div class="options-container">
                                                    <img class="img-fluid options-item" src="/uploads/{{$file->getFileName()}}" alt="">
                                                    <div class="options-overlay bg-black-75">
                                                        <div class="options-overlay-content">
                                                            <a class="btn btn-sm btn-primary btn-view" data-id="{{$key}}" href="javascript:void(0)">
                                                                <i class="fa fa-pencil-alt mr-1"></i> View
                                                            </a>
                                                            <form action="{{ route('singleDelete', $file->getFileName()) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-fw fa-times"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        @empty
                                        <div class="col-md-12 text-center">
                                            <h2 class="font-w700 text-info">No violators yet!</h2>
                                        </div>
                                        @endforelse
                                        {{-- <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo1@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo2@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo3@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo4@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo5@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 animated fadeIn push">
                                            <a class="img-link img-link-zoom-in img-lightbox" href="assets/media/photos/photo6@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo6.jpg" alt="">
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Gallery -->
                    </div>
                    <!-- END Advanced -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-0">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                            Helmet Detection
                        </div>
                        <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="javascript:void(0);">{{ date('Y') }}</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <script src="{{asset('js/dashmix.core.min.js')}}"></script>

        <script src="{{asset('js/dashmix.app.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

        <script>jQuery(function(){ Dashmix.helpers('magnific-popup'); });</script>
        

        <script>
            var currentViolatorsCount = {{ count($files) }};

            $(document).ready(function() {   
                checkViolators();
            });

            $('.btn-view').on('click', function() {
                let id = $(this).data('id');
                console.log(`#${id}`);
                $(`#${id}`).click();
            });

            function checkViolators()
            {
                window.setTimeout(() => {
                    $.ajax({
                        url: "{{ route('file-count') }}",
                        type: "GET",
                        success: function (result) {
                            console.log(result);
                            if(result > currentViolatorsCount) {
                                $('#violation-alert').append(`<div class="alert alert-warning d-flex align-items-center justify-content-between" role="alert">
                                        <div class="flex-fill mr-3">
                                            <p class="mb-0">New violator detected! Refresh the page to view. <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                                        </div>
                                        <div class="flex-00-auto">
                                            <i class="fa fa-fw fa-exclamation-circle"></i>
                                        </div>
                                    </div>`);
                            }
                            currentViolatorsCount = result;
                            checkViolators();
                        }
                    })
                }, 1000);
            }
        </script>
    </body>
</html>
