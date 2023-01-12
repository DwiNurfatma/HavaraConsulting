@extends('master.master_user')

@section('content')
<style>
    .max-a {
        max-width: 500px;
        max-height: 400px;
    }

    .v {
        color: black;
    }
</style>

<div class="container">
    <div class="row ">
        <div class="col-sm-6  m-auto">
            <div class=" h-100">
                <img class="card-img-top  mt-3 mx-auto d-block max-a" src="{{ asset('/images/slide1.jpg') }}">
            </div>
        </div>
        <div class="col-sm-6  m-auto">
            <div class=" h-100">
                <img class="card-img-top  mt-3  mx-auto d-block max-a
                " src="{{ asset('/images/slide2.jpg') }}">
            </div>
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 mt-4 font-italic border-bottom">
                OUR LATEST NEWS
            </h3>
            @foreach($article as $a)
            <div class="row mb-2 pb-5">
                <div class="col-md-12 mt-6">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ url('/images/'.$a->file) }}" class="card-img-top h-150" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mt-0 pt-0">
                                <h5 class="card-title mt-10"><a href="/detail/{{ $a->judul }}">{{ $a->judul }}</a></h5>
                                <div class="v">
                                    {{ Str::limit( $a->deskripsi, 200) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <aside class="col-md-4 blog-sidebar">
            <h3 class="pb-5 mb-4 mt-4 font-italic border-bottom">
            </h3>
            <div class="p-3 mb-5 bg-light rounded">
                <img class="card-img pb-5" src="{{ url('/images/slide1.jpg') }}" class="card-img-top h-100">
                <img class="card-img pb-5" src="{{ url('/images/slide2.jpg') }}" class="card-img-top h-100">
                <img class="card-img pb-5" src="{{ url('/images/slide4.jpg') }}" class="card-img-top h-100">
            </div>
        </aside>
    </div>
</main>

@endsection