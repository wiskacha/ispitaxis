<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="flex min-h-screen flex-col">
        {{-- Top header/navbar --}}
        <x-header />

        {{-- Sidebar + main content area --}}
        <x-sidebar>
            {{ $slot }}
        </x-sidebar>
    </div>

</body>

</html>
