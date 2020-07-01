<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 mx-auto my-auto">
                    <img class="img-fluid my-4" src="/img/404.svg" alt="404-not-found">
                </div>
                <div class="col-12 text-center text-black-50 py-3">
                    <a href="{{ route('home')}}">Regresar</a>
                </div>
            </div>
        </div>
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{config('app.name')}} | Copiright@ {{ date('Y')}}
        </footer>
    </div>
</body>
</html>