{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title', 'Layout')</title>
    </head>
    <body>
        <div>
            @yield('content', 'No Content')
        </div>
    </body>
</html>