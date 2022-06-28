@extends('layouts.dashmix')
@section('styles')
<link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="block block-bordered block-rounded block-fx-pop">
            <div class="block-header block-header-default">
                <h3 class="block-title">Users</h3>
                <div class="block-options">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-plus mr-1"></i>Add New User</a>
                </div>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm" id="tbl-users">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', $user->id) }}" id="delete-{{$user->id}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button class="btn btn-sm btn-outline-danger btn-delete" data-id="{{$user->id}}"><i class="fa fa-trash fa-fw"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="font-italic text-danger text-center">No users in the database yet...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="block-content"></div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#tbl-users').DataTable({
        	language: {
        		emptyTable: "No users in the database yet..."
        	}
        });
    });
    $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure you want to delete this item?',
            text: "This item will be sent in the trash!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e04f1a',
            cancelButtonColor: '#343a40',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                $(`#delete-${id}`).submit();
            }
        })
    })
</script>
@endsection