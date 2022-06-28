@extends('layouts.dashmix')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="block block-bordered block-rounded block-fx-pop">
            <div class="block-header bg-success-op">
                <h3 class="block-title">Edit Admin User</h3>
                <div class="block-options">
                    <a href="{{ route('admin-user.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-chevron-left mr-1"></i>Go Back to Admin Users List</a>
                </div>
            </div>
            <div class="block-content">
                <form action="{{ route('admin-user.update', $adminUser->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name (Required)</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username (Required)</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role (Required)</label>
                                <select name="role" id="role" class="form-control form-control-sm">
                                    @if (auth()->user()->role == \App\Constants\Role::SUPERADMIN)
                                    <option value="2" {{ $adminUser->id == 2 ? 'selected' : '' }}>Admin</option>
                                    <option value="3" {{ $adminUser->id == 3 ? 'selected' : '' }}>General</option>
                                    @else
                                    <option value="3" {{ $adminUser->id == 3 ? 'selected' : '' }}>General</option>
                                    @endif
                                </select>
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