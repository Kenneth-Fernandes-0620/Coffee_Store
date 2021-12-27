<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased" x-data="{ message: localStorage.getItem('theme'), 
    cart : (localStorage.getItem('cart') == null) ? [] : JSON.parse(localStorage.getItem('cart')) }"
    x-init="$watch('message', (val) => localStorage.setItem('theme', val)); $watch('cart',(val)=>localStorage.setItem('cart',JSON.stringify(val)));">
    <div  :class="message">
        <div class="min-h-screen bg-white dark:bg-gray-900">
            <livewire:navigation-menu />
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('modals')
    @livewireScripts
</body>

</html>
