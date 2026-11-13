<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Album Catalogue</title>
</head>
<body>

    <header>
        <h1>Music Album Catalogue</h1>
        <nav>
            <a href="{{ route('albums.index') }}">All Albums</a>
            |
            <a href="{{ route('albums.create') }}">Add Album</a>
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

</body>
</html>
