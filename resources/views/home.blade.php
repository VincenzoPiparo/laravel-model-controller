<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>laravel-model-controller</title>
</head>
<body>

    
    @foreach ($movies as $movie)
        <div class="container">
            <div class="col-4">
                <div class="bd-highlight mb-3">
                    <div class="card p-2 bd-highlight" style="width: 18rem;">
                        <div class="card-body p-2 bd-highlight">
                        <h5 class="card-title p-2 bd-highlight">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted p-2 bd-highlight">{{ $movie->original_title }}</h6>
                        <p class="card-text p-2 bd-highlight">{{ $movie->nationality }}</p>
                        <p class="card-text p-2 bd-highlight">{{ $movie->date  }}</p>
                        <p class="card-text p-2 bd-highlight">{{ $movie->vote  }}</p>
                        </div>
                    </div>    
                </div>  
            </div>
        </div>
    @endforeach
</body>
</html>