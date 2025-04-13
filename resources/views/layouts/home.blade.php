<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.header')

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>