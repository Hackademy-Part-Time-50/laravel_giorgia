<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- tuo css se vuoi metterlo --}}
    <title>{{ $articolo }}</title>
</head>

<body>
    <div class="container-fluid ">

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BLOG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contatto') }}">Contatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articoliDisponibili') }}">Articoli</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nuovoArticolo') }}">Articoli</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>

        {{-- articoli --}}

        <div class="container-fluid ">

            <h1>{{ $articolo }}</h1>


            <div class="mt-5">
                @foreach($articles as $article)
                    <div class="mb-2 shadow-sm p-3 rounded">
                        <h4>{{ $article['title'] }}</h4>
                    </div>
                @endforeach

                @if (! $articles)
                <h4>Nessun articolo disponibile!</h4>
                @endif

            </div>
        </div>

    </div>
</body>

</html>
