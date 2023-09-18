<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="d-flex flex-column h-100">

    @include('partials.header')

    <main class="container py-3">

        <div class="dropdown position-fixed bottom-0 end-0 me-3 bd-mode-toggle" style="margin-bottom: 4rem">
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-gear-fill" style="font-size: 16px"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-center">{{ __('Set site language:') }}</a></li>
                <li class="d-flex align-items-center">
                    <img src="images/icons/estados-unidos.png" class="ms-2" width="16px">
                    <a href="{{ route('locale', 'en') }}" class="dropdown-item ps-1">{{ __('English') }}</a>
                </li>
                <li class="d-flex align-items-center">
                    <img src="images/icons/mexico.png" class="ms-2" width="16px">
                    <a href="{{ route('locale', 'es') }}" class="dropdown-item ps-1">{{ __('Spanish') }}</a>
                </li>
            </ul>
        </div>

        {{-- {{ $slot }} --}}
    </main>

    @include('partials.footer')

    @livewireScripts
</body>

</html>
