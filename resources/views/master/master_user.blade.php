<!DOCTYPE html>
<html>

<head>
    <title>Havara Consulting</title>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/img/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/solid.css ">
    <link rel="stylesheet" type="text/css" href="/font-awesome/light.css ">
    <link rel='stylesheet' id='sdm-styles-css' href='https://havara.co.id/wp-content/plugins/simple-download-monitor/css/sdm_wp_styles.css?ver=5.3.6' type='text/css' media='all' />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    ul {
        list-style-type: none;
    }

    .nav-item a:hover {
        background-color: #d3d3d3;
        font-weight: bold;
        color: black;
    }

    .navbar-custom {
        height: 30px;
    }

    li a:hover {
        background-color: #d3d3d3;
        font-weight: bold;
        color: black;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: gainsboro;">
            <button height="40px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @foreach($address as $y)
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto ">
                    <li class="nav-item " style="font-size:13px; "><img src=" {{ url('/images/'.$y->gambar) }}" height="13px">
                        {{$y->deskripsi}}
                    </li>
                </ul>
            </div>
            @endforeach
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            @foreach($logo as $x)
            <img src="{{ url('/images/'.$x->file) }}" height="40px">
            @endforeach
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3 ml-3">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item active mr-3 ml-3">
                        <a class="nav-link " href="/service">Service</a>
                    </li>
                    <li class="nav-item active mr-3 ml-3">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item active mr-3 ml-3">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item active mr-3 ml-3">
                        <a class="nav-link" href="{{ url('../file/c-havara.pdf') }}" target="_blank"><strong><img src="images/download.png" width="20px"></strong></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- content -->
    <section class="content">
        <div>
            @yield('content')
        </div>
    </section>
    <footer>
        <ul class="a">
            @foreach($footer as $p)
            <li class="b">
                <h1> {{ $p->judul }}</h1>
                <p>{{ $p->deskripsi }}</p>
            </li>
            @endforeach
            <li><strong><u>Menu</u></strong>
                <p><a href="/">Home</a></p>
                <p><a href="/service">Service</a></p>
                <p><a href="/blog">Blog</a></p>
            </li>
            <li><strong><u>Contact</u></strong>
                <ul>
                    @foreach($sosmed as $k)
                    <a href="{{ $k->link }}"><img src="{{ url('/images/'.$k->logo) }}" width="20px" height="20px">
                        @endforeach
                </ul>
            </li>
        </ul>
    </footer>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>