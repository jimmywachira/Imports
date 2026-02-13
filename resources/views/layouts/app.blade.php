<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Xplore Car Imports') }}</title>
    <meta name="description" content="Xplore Car Imports - Premium Japanese vehicles with full transparency and KEBS compliance">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Code:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="w-full min-h-screen flex flex-col bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 antialiased" style="font-family: 'Google Sans Code', sans-serif;">

    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="relative w-full flex-1">
        <main class="w-full">
            @isset($slot)
                {{ $slot }}
            @else
                @yield('content')
            @endisset
        </main>
    </div>

    <!-- Toast Notifications Placeholder -->
    <div id="toast-container" class="fixed bottom-4 right-4 z-50 pointer-events-none"></div>

    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
