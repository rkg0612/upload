@extends('layouts.dashmix')
@section('styles')
<link rel="stylesheet" href="{{asset('js/plugins/magnific-popup/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
@stop
@section('content')
<div class="block block-bordered block-rounded block-fx-pop">
    <div class="block-content">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('{{$game->banner_url}}');">
            <div class="bg-black-50">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" href="javascript:void(0);">
                            <img class="img-avatar img-avatar96" src="{{ $game->avatar_url }}" alt="">
                        </a>
                        <h1 class="font-w700 my-2 text-white">{{ $game->name }}</h1>
                        <h2 class="h4 font-w700 text-white-75">
                        {{$game->description}}
                        </h2>
                        <a href="{{ route('game.index') }}" class="btn btn-hero-primary">
                        <i class="fa fa-fw fa-arrow-left mr-1"></i> Go Back to Games List
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-full content-boxed">
            <div class="row">
                <div class="col-12">
                        <h3>Other Details</h3>
                        <h3 class="content-heading mb-2 p-0">Token Name</h3>
                        <div class="form-control form-control-sm" readonly>{{$game->token ?: 'N/A'}}</div>
                        <h3 class="content-heading mb-2 p-0">Category</h3>
                        <div class="form-control form-control-sm" readonly>{{$game->category ?: 'N/A'}}</div>
                        <h3 class="content-heading mb-2 p-0">Game Slug</h3>
                        <div class="form-control form-control-sm" readonly>{{$game->code ?: 'N/A'}}</div>
                        <h3 class="content-heading mb-2 p-0">API URL</h3>
                        <div class="form-control form-control-sm" readonly>{{$game->api_url ?: 'N/A'}}</div>
                        <h3 class="content-heading mb-2 p-0">API Type</h3>
                        <div class="form-control form-control-sm" readonly>{{$game->api_type ?: 'N/A'}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script>jQuery(function(){ Dashmix.helpers('magnific-popup'); });</script>
<script>
</script>
@stop