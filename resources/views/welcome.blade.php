<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @foreach($movies as $movie)
    <div class="card" style="width: 18rem; border: 1px solid black">
        <div class="card-body" style="padding: 20px">
            <h2 class="card-title">{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
            <span>{{$movie->date}}</span>
            <p>Nationality: {{$movie->nationality}}</p>
            <span>vote: {{$movie->vote}}</span>
        </div>
    </div>
    @endforeach
</head>
<body>
    
</body>
</html>