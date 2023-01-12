@extends('master.master-admin')

@section('content')


<div class="col-md-12 col-sm-12 bg-white p-4">
    <center class="mt-4">
        <h2>EDIT FOOTER</h2>
    </center>
    <form method="post" action="/admin/editfooter_process">
        @csrf
        <input type="hidden" value="{{ $footer->id }}" name="id">
        <div class="form-group">
            <label>TITLE</label>
            <input type="text" class="form-control" value="{{ $footer->judul }}" name="judul" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>DESCRIPTION</label>
            <textarea class="form-control" name="deskripsi" rows="15">{{ $footer->deskripsi }}
            </textarea>
        </div>
</div>

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
<div class="col-md-3 col-sm-18 bg-white p-4" style="height:80px" !important>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-primary" value="UPDATE">
    </div>
</div>
</form>
@endsection