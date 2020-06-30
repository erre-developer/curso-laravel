<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    
</head>
<body>
    @include('partials/nav')
    
    @yield('content')

    <footer>
        <h4>Footer Copy@2020</h4>
    </footer>
</body>
</html>