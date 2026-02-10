<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Talisva Admin')</title>

    <!-- Google Fonts (matches public site) -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marcellus&family=Marcellus+SC&display=swap');
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Admin-specific CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    @stack('head')
</head>
<body class="admin-page @yield('body-class')">

<div class="admin-layout d-flex">
    @include('admin.partials.nav')

    <main class="admin-main flex-grow-1">
        @yield('content')
    </main>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

@stack('scripts')
</body>
</html>

