<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata</title>
</head>
<body>
    
    <h1>tester biodata</h1>
    <p>nama {{$nama}}</p>
    <h3>Mata pelajaran</h3>
    <ul>
    @foreach($maktul as $m)
        <li>{{$m}}</li>
    @endforeach
    </ul>

</body>
</html>