<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title',) | Administration</title>
</head>
<body>
    <div>
        @if (session('success'))
            <div class="bg-green-200 text-green-900 py-5">
                {{session('success')}}
            </div>
        @endif
    </div>
        @yield('content')
</body>
</html>