@extends('master.master-admin')

@section('content')
<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1>FOOTER "ABOUT"</h1>
<div class="col-md-12 bg-white p-4">
    <div class="col-lg-12 mx-auto mt-0">
        <table class="table table-responsive-lg table-bordered table-hover table-stripped">
            <thead>
                <tr align="center">
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th colspan="2">OPTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footer as $i => $footer)
                <tr>
                    <td>{{ $footer->judul }}</td>
                    <td align="justify">{{ $footer->deskripsi }}</td>
                    <td><a href="/admin/editfooter/{{ $footer->id }}"><button class="btn btn-success">EDIT</button></a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection