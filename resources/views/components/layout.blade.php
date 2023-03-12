<!doctype html>
<html class="h-full bg-gray-50" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel from Scratch</title>
</head>
<body class="h-full">
    <x-navbar />
    <main class="container mx-auto">
        <div class="py-8 sm:py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    @vite('resources/js/app.js')
</body>
</html>
