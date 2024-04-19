<!doctype html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
    <title>lensMarkSearch</title>
</head>

<body>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <section class="bg-white dark:bg-dark py-20 lg:py-[120px]">
        <div class="container mx-auto">
            @yield('content')
            @yield('modal')
        </div>
        @yield('scripts')
    </section>
</body>
</html>