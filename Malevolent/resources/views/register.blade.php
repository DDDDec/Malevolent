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
        <x-global.header/>

        <div class="margin-0-auto width-max-1200px">
            <div class="grid grid-two-columns-threefr-onefr grid-gap-two">
                <div>

                    <x-content.homepage.servers/>
                    <x-content.homepage.server-features/>
                    <x-content.homepage.server-statistics/>

                </div>
                <div>

                    <x-content.homepage.user-activity/>
                    <x-content.homepage.server-activity/>

                </div>
            </div>
        </div>

        <x-global.footer/>

        @livewireScripts
    </body>
</html>
