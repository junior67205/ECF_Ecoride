<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Titre par défaut')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    @include('layouts.navbar')

    <div class="flex flex-col flex-1">
        @yield('content')
    </div>

    @include('layouts.footer')
    @stack('scripts')
</body>
</html> 