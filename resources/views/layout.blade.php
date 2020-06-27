<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Laravel')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    
    @yield('content')

    <footer>
        <h4>Footer Copy@2020</h4>
    </footer>
</body>
</html>