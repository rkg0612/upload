<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violators</title>
</head>
<body>
    <h1>All violators</h1>
    <ul>
    @foreach($files as $file)
        <li>
            <a href="/uploads/{{$file->getFileName()}}"> {{$file->getFileName()}} </a>
        </li>
    @endforeach
    </ul>
</body>
</html>