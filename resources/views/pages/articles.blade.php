<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articoli</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('articles') }}">Articoli</a>
            <a href="{{ route('aboutUs') }}">Chi Siamo</a>
            <a href="{{ route('contacts') }}">Contatti</a>
        </nav>
    
        <h1>Articoli</h1>

        <div class="mt-5">
            @if(! $articles)
                <h4>Nessun articolo disponibile!</h4>
            @else
                @foreach($articles as $article)
                @if ($article['visible'])
                    
                
                <div class="mb-2 shadow-sm p-3 rounded">
                    <h4>{{ $article['title'] }}</h4>

                    <div class="mt-2 text-end">
                        <a href="{{ route('article', $article['id']) }}">Leggi l'articolo completo</a>
                    </div>
                </div>
                @endif
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>