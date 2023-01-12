@extends('master.master-admin')
@section('content')
<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1>SERVICE</h1>

<div class="col-sm-12 bg-white p-4">
    <a href="/admin/serviceadd"><button class="btn btn-info" style="margin-bottom:10px;">ADD SERVICE</button></a>

    <!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
    <div class="col-sm-12 bg-white p-4">
        <table class="table table-responsive-lg table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 30%;">TITLE</th>
                    <th class="text-center">IMAGE</th>
                    <th>DESC</th>
                    <th class="text-center">OPTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $g)
                <tr>
                    <td>{{$g->judul}}</td>
                    <td><img width="150px" src="{{ url('/images/'.$g->gambar) }}"></td>
                    <td>{{$g->keterangan}}</td>
                    <td class="text-center"><a href="/admin/service_delete/{{ $g->gambar }}"><button class="btn btn-danger "><span class="fas fa-trash"></span></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection