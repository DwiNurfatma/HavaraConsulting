@extends('master.master-admin')
@section('content')

<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>


<h1>SOCIAL MEDIA</h1>
<div class="col-sm-12 bg-white p-4">
    <a href="/admin/sosmedadd"><button class="btn btn-info" style="margin-bottom:10px;">ADD SOSMED</button></a>

    <div class="col-md-12 bg-white p-4">
        <table class="table table-responsive-lg table-bordered table-striped">
            <thead>
                <tr>
                    <th>File</th>
                    <th>Link/th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sosmed as $g)
                <tr>
                    <td><img width=" 50px" src="{{ url('/images/'.$g->logo) }}"></td>
                    <td>{{ Str::limit($g->link, 30) }}</td>
                    <td class="text-center"><a href="/admin/sosmed_delete/{{ $g->logo }}"><button class="btn btn-danger"><span class="fas fa-trash text-white"></span></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection