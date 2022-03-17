<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Model Controller</title>
</head>
<body>
    <div class="container">
        <div class="card">
            @foreach($movies as $movie)
            <ul>
                <li><h1>{{ $movie->title }}</h1></li>
                <li>{{ $movie->original_title }}</li>
                <li>{{ $movie->nationality }}</li>
                <li>{{ $movie->vote }}</li>
            </ul>
            @endforeach
        </div>
    </div>
</body>
</html>