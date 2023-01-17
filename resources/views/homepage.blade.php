<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-6 col-sm-2 col-md-3 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="sub-title mb-2 text-muted"> {{ $movie->original_title}}</h6>
                                <p class="card-text">{{ $movie->date }}</p>
                                <p><strong>Voto:</strong>{{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </main>

</body>

</html>
