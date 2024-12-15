<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
</head>
<body>
    {{-- includere la navbar nel mio layout --}}
    

    @include('partials/header')

    <main>
        <h1>
            @yield('titolo')
        </h1>
        {{-- dobbiamo "concedere" che la sezione chiamata "content" venga inserita qui dentro --}}
        @yield('content')
        
    </main>

    @include("partials/footer")

    @yield('sotto-footer')

</body>
</html>