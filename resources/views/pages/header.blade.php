<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Header Page</h1>
   <ul>
    {{-- @foreach ($fruits as $fru )
        <li>{{$fru}}</li>
    @endforeach --}}

    @forelse ($fruits as $fru )
        <li>{{$fru}}</li>
    @empty
        <p>Not Found</p>
    @endforelse
   </ul>
</body>
</html>