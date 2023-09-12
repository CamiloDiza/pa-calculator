<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
    @include('partials.header')

    <main class="container py-3">
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>

</html>
