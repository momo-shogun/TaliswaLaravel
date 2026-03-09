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

<script>
(function () {
    var MAX_FILE_SIZE = 2 * 1024 * 1024;
    document.querySelectorAll('form[enctype="multipart/form-data"]').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            var inputs = form.querySelectorAll('input[type="file"]');
            for (var i = 0; i < inputs.length; i++) {
                var files = inputs[i].files;
                if (!files || !files.length) continue;
                for (var j = 0; j < files.length; j++) {
                    if (files[j].size > MAX_FILE_SIZE) {
                        e.preventDefault();
                        alert('File "' + files[j].name + '" is too large. Please use an image under 2MB.');
                        return;
                    }
                }
            }
        });
    });
})();
</script>

@stack('scripts')
</body>
</html>

