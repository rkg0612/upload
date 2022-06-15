<!DOCTYPE html>
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
</html>