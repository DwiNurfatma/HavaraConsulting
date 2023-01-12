@extends('master.master_user')

@section('content')

<style>
    .container {
        padding: 30px;
    }

    .max-img {
        max-width: 50%;
        height: auto;
    }
</style>
<div class="container">
    <div class="row">
        @foreach ($service as $d => $service)
        <div class="col-sm-6 mb-4">
            <div class="card  h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $service->judul }}</h5>
                    <img class="card-img-top mx-auto d-block max-img" src="{{ url('/images/'.$service->gambar) }}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection