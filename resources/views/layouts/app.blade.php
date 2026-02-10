<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Talisva Website')</title>

    <!-- Google Fonts (matches static site) -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marcellus&family=Marcellus+SC&display=swap');
    </style>

    <!-- Spacing Utilities -->
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    @stack('head')
</head>
<body class="@yield('body-class')">

@yield('content')

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Main script bundle (if needed) -->
<script type="module" src="{{ asset('assets/js/script.js') }}"></script>

@stack('scripts')
</body>
</html>

