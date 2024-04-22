<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags, stylesheets, etc. -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Dynamic title -->
    <title>@yield('title', 'Your App')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <!-- Navigation, header, etc. -->

    <!-- Main content -->

    @yield('content')


    <!-- Scripts, footer, etc. -->
</body>

</html>