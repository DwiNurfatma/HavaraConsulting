@extends('master.master-admin')

@section('content')

<h1 class=" mt-5">ADD SERVICE</h1>
<div class="col-sm-12 bg-white p-4">
    <form action="/service_process" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label>TITLE</label>
            <textarea class="form-control" name="judul"></textarea>
        </div>
        <div class="form-group">
            <label>DESCRIPTION</label>
            <textarea class="form-control" name="keterangan"></textarea>
        </div>
        <div class="form-group">
            <div style="position:relative;">
                <a class='btn btn-info col-sm-3' href='javascript:;'>
                    Choose Image...
                    <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="gambar" size="40" onchange='$("#upload-file-info").html($(this).val());'>
                </a>
                &nbsp;
                <span class='label label-info' id="upload-file-info"></span>
            </div>
        </div>
        <input type="submit" value="Upload" class="btn btn-primary col-sm-3">
    </form>
</div>
</div>
</div>
@endsection