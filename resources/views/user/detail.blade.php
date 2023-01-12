@extends('master.master_user')
<style>
    .detail {
        text-align: justify;
        margin-top: 50px;

    }

    .detail img {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .detail h2 {
        text-align: center;
    }

    .detail h4 {
        font-size: 16px;
        text-decoration: none;
        letter-spacing: 0px;
        color: black;
        font-weight: lighter;
    }
</style>
@section('content')
<main role="main ">
    <div class="row">
        <div class="col-md-9 m-0 blog-main">
            <!-- <article> -->
            <div class="detail m-5">
                <h2 class="m-2">{{ $article->judul }}</h2>
                <img width="300px" height="300px" src="{{ url('/images/'.$article->file) }}">
                <h4 class="mt-4">{{ $article->deskripsi }}</h4>
            </div>
            <!-- </article> -->
            <div class="back">
                <a href="/blog">back</a>
            </div>
        </div>
        <aside class="col-md-3 blog-sidebar">
            <h3 class="pb-5 mb-4 mt-4 font-italic border-bottom">
            </h3>
            <div class="p-3 mb-5 mr-3 bg-light rounded">
                <img class="card-img pb-5" src="{{ url('/images/slide1.jpg') }}" class="card-img-top h-100">
                <img class="card-img" src="{{ url('/images/slide2.jpg') }}" class="card-img-top h-100">
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main>
@endsection