<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} - {{ Route::currentRouteName() }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="background font-family padding margin">

        <div class="background-image width-100-percent position-absolute position-top height z-index background-image-cover mask-image opacity"></div>

        <x-global.navigator/>

        @livewireScripts
    </body>
</html>
