<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div id="signUp"></div>
        @vite('resources/js/app.js')
    </body>
</html>