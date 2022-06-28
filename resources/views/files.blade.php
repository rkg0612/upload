@extends('layouts.dashmix')
@section('content')
<!-- Advanced -->
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
            @php
            $counter = 0;
            @endphp
            <div class="block-content block-content-full">
                @if($filesGroup->count() > 0)
                <form action="{{ route('allDelete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-fw fa-trash mr-1"></i>Delete
                        ALL</button>

                    <a type="button" download href="{{ route('export-files') }}" class="btn btn-sm btn-success"><i class="fa fa-download fa-fw mr-1"></i>Export Images</a>
                </form>
                @endif
                @forelse ($filesGroup as $filesKey => $files)
                <h3 class="content-heading">{{ $filesKey }}</h3>
                <div class="row gutters-tiny js-gallery img-fluid-100">
                    @forelse($files as $key => $file)
                    @php
                    $counter++;
                    @endphp
                    <div class="col-md-1 col-lg-1 animated fadeIn push">
                        <a class="img-link img-link-zoom-in img-lightbox" id="{{str_replace(",","",str_replace(" ", "", $filesKey)).$key}}" href="/uploads/{{$file->getFileName()}}">
                            <div class="options-container">
                                <img class="img-fluid options-item" src="/uploads/{{$file->getFileName()}}" alt="">
                                <h6>{{ date('F j, Y G:ia', $file->getCtime() + 28800) }}</h6>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary btn-view" data-id="{{str_replace(",","",str_replace(" ", "", $filesKey)).$key}}" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt mr-1"></i> View
                                        </a>
                                        <form action="{{ route('singleDelete', $file->getFileName()) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit"><i
                                                    class="fa fa-fw fa-times"></i> Delete</button>
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
                </div>
                @empty
                <div class="row gutters-tiny js-gallery img-fluid-100">
                    <div class="col-md-12 text-center">
                        <h2 class="font-w700 text-info">No violators yet!</h2>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- END Gallery -->
</div>
<!-- END Advanced -->
@stop
@section('scripts')
<!-- Page JS Plugins -->
<script src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script>
    jQuery(function(){ Dashmix.helpers('magnific-popup'); });
</script>


<script>
    var currentViolatorsCount = {{ $counter }};

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
@stop