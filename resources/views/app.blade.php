<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
<div id="wrapper" class=" mx-auto">
    <header id="header">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center py-20 font-header">
                <a href="{{ route('home') }}">
                    <h1 class="text-5xl font-bold text-amber-400">ImIrregular</h1>
                </a>
            </div>
        </div>
    </header>
    <div id="main">
        <div class="container mx-auto px-4">
            <livewire:search/>
        </div>
    </div>
</div>
<!-- Scripts -->
@vite('resources/js/app.js')
</body>
</html>
