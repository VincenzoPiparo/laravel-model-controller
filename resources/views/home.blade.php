<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sono la homepage</h1>

    <h2>Movies: </h2>

    @foreach ($movies as $movie)
    {{-- Stampa momentanea per visualizzarli in pagina --}}
        <div>
            <h2> {{ $movie->title }}</h2>
        </div>
        <div>
            <p> {{ $movie->original_title }} </p>
        </div>
        <div>
            <p> {{ $movie->nationality }} </p>
        </div>
        <div>
            <p> {{ $movie->date }} </p>
        </div>
        <div>
            <p> {{ $movie->vote }} </p>
        </div>
    @endforeach
</body>
</html>