<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title', env('APP_NAME'))</title>

</head>

<body class="bg-slate-100">
    @section('header')
    <header class="mx-auto">
        <nav class="flex justify-center bg-cyan-600 shadow-md">
            <ul class="flex flex-row space-x-6 text-center p-6 text-white font-bold ">
                <li>
                    <a href="/">Enregistrer</a>
                </li>
                <li>
                    <a href="{{route('evenement.index')}}">Liste</a>
                </li>
            </ul>
        </nav>
    </header>
    @show

    <div class="flex items-center justify-center">
        @yield('content')
    </div>

</body>

</html>
