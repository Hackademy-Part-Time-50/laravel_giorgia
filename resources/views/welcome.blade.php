<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HackBlog</title>

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
        <h1>{{config('app.name')}}</h1>
    </div>

    
</body>
</html>