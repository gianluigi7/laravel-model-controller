
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Movies</h1>
    <div class="container">

        <ul>
            @foreach ($movies as $movie)
            <li>
                <p>{{ $movie -> title }}</p>
                <p>titolo originale :{{ $movie -> original_title }}</p>
                <p>provenienza: {{ $movie -> nationality }}</p>
                <p>uscita :{{ $movie -> date }}</p>
                <p> {{ $movie -> vote }}</p>
            </li>
            @endforeach
        </ul>
    </div>

<!-- ESEMPIO IMG
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> -->
</body>
</html>