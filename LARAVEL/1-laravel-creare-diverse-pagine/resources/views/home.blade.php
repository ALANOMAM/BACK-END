<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Primi passi</title>
</head>
<body>
    <nav>
        <ul style="display: flex; list-style-type: none; gap: 20px; border-bottom: 1px solid black; padding: 1em;">
            <li>
                <a href="{{ route('home') }}">Homepage</a>
            </li>
            <li>
                <a href="{{ route('second') }}">Seconda pagina</a>
            </li>
            <li>
                <a href="{{ route('third') }}">Terza pagina</a>
            </li>
        </ul>
    </nav>

    <h1>
        {{ $saluto }}
    </h1>
    <hr>
    <h2>
        {{ $secondoTitolo }}
    </h2>
</body>
</html>