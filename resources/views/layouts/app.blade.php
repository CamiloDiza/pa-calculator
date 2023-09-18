<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="d-flex flex-column">

    @include('partials.header')

    <main class="container py-3">
        {{ $slot }}
    </main>

    @include('partials.footer')
    {{-- @include('partials.set-lang') --}}

    @livewireScripts
</body>

</html>
