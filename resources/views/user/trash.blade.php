@extends('layouts.dashmix')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="block block-bordered block-rounded block-fx-pop">
            <div class="block-header block-header-default">
                <h3 class="block-title">Trashed Games</h3>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm" id="tbl-games">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($games as $game)
                            <tr>
                                <td>{{ $game->name }}</td>
                                <td>{{ substr($game->description, 0, 100) . ' ...' }}</td>
                                <td>
                                    <form action="{{ route('game.restore', $game->id) }}" id="restore-{{$game->id}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <form action="{{ route('game.delete', $game->id) }}" id="delete-{{$game->id}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button class="btn btn-sm btn-outline-info btn-restore" data-id="{{$game->id}}" title="Restore"><i class="fa fa-history fa-fw"></i></button>
                                    <button class="btn btn-sm btn-outline-danger btn-delete" data-id="{{$game->id}}" title="Permanently Delete"><i class="fa fa-ban fa-fw"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="font-italic text-danger text-center">No trashed games in the database yet...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#tbl-games').DataTable({
        	language: {
        		emptyTable: "No games in the database yet..."
        	}
        });
    });

    $('.btn-restore').on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure you want to restore this item?',
            text: "This will restore all related children objects.",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3fc3ee',
            cancelButtonColor: '#343a40',
            confirmButtonText: 'Yes, restore it!'
        }).then((result) => {
            if (result.value) {
                $(`#restore-${id}`).submit();
            }
        })
    })

    $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure you want to PERMANENTLY DELETE this item?',
            text: "You will not be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e04f1a',
            cancelButtonColor: '#343a40',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $(`#delete-${id}`).submit();
            }
        })
    })
</script>
@endsection