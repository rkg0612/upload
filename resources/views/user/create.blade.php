@extends('layouts.dashmix')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="block block-bordered block-rounded block-fx-pop">
            <div class="block-header bg-success-op">
                <h3 class="block-title">Add New User</h3>
                <div class="block-options">
                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-chevron-left mr-1"></i>Go Back to Users List</a>
                </div>
            </div>
            <div class="block-content">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name (Required)</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email (Required)</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password (Required)</label>
                                <input type="text" name="password" id="password" class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-block btn-success" role="submit"><i class="fa fa-fw fa-save mr-1"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection