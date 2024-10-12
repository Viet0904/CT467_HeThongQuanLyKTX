<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ký túc xá')</title>
    <!-- Load CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Load JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
