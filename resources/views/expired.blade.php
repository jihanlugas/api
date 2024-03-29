<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div class="flex flex-col">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-600 text-center font-light tracking-wider text-3xl mb-6">
                    {{ 'Lisence Has Expired' }}
                </h1>
                <h3 class="text-gray-600 text-center font-light tracking-wider text-lg mb-6">
                    {{ 'Contact Code Writer For Information' }}
                </h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>
