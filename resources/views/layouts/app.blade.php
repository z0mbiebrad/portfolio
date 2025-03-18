<!DOCTYPE html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ 
        darkMode: localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches) 
    }" 
    x-init="$watch('darkMode', val => localStorage.theme = val ? 'dark' : 'light')" 
    :class="{ 'dark': darkMode }"
>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="NBTVWFFI" defer></script>
    <!-- / Fathom -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white dark:bg-black">
    <div class="min-h-screen bg-zinc-100 dark:bg-zinc-900">

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow-xs dark:bg-zinc-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="bg-zinc-100 dark:bg-zinc-900">
            {{ $slot }}
        </main>
    </div>
</body>

</html>