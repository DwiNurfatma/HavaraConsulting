@extends('master.master-admin')
@section('content')
<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1>LOGO HEADER</h1>
<div class="col-md-12 bg-white p-4">
    <div class="col-lg-12 mx-auto mt-0">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>FILE</th>
                    <th class="text-center">OPTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logo as $g)
                <tr>
                    <td><img width="150px" src="{{ url('/images/'.$g->file) }}"></td>
                    <td class="text-center"><a href="/admin/logo_delete/{{ $g->file }}"><button class="btn btn-danger"><span class="fas fa-trash text-white"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="/logo_process" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div style="position:relative;">
                    <a class='btn btn-info col-sm-2' href='javascript:;'>
                        Choose Image...
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file" size="40" onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-file-info"></span>
                </div>
            </div>
            <input type="submit" value="Change" class="btn btn-primary col-sm-2">
        </form>
    </div>
</div>

@endsection