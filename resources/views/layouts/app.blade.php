<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/img/favicon.ico') }}">
    <title>Admin Panel Havara Consulting</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .login {
            margin: 35px 425px;
            width: 400px;
            padding: 10px;
            opacity: 0.55;
        }

        input[type=email],
        input[type=password] {
            margin: 15px auto;
            width: 100%;
            padding: 25px;
        }

        .submit [type=submit] {
            background-color: #313b48;
            padding: 10px;
            margin: 15px auto;
            width: 380px;
        }

        .submit [type=submit]:hover {
            background-color: #4d5c70;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue ">
            <div class="container">
                <img src="{{ asset('dist/img/logo-havara.png') }}" alt="Havara Logo" class="brand-image" style="display: block; margin: 5px 5px 4px 0px; max-height:  40px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>