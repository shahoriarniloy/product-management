<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: Figtree, sans-serif;
                line-height: 1.5;
                margin: 0;
                padding: 0;
            }
        </style>
    @endif
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-red-100">
        <h1 class="text-3xl font-semibold text-red-800">Hello</h1>
    </div>

</body>
</html>
