<!doctype html>
<html lang="kr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
        <title>LensMarkSearch</title>
    </head>

    <body>
        <script defer src="https://unpkg.com/alpinejs@3.13.8/dist/cdn.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <section class="bg-white dark:bg-dark py-20 lg:py-[120px]">
            <div class="container mx-auto">
                @yield('contents')
            </div>
            @yield('scripts')
        </section>
    </body>
</html>