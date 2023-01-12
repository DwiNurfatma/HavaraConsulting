@extends('master.master-admin')

@section('content')

<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1>EDIT ARTICLE</h1>
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
<div class="col-sm-12 bg-white p-4">

    <form method="post" action="/admin/edit_process">
        @csrf
        <input type="hidden" value="{{ $article->id }}" name="id">
        <div class="form-group">
            <label>TITLE</label>
            <input type="text" class="form-control" value="{{ $article->judul }}" name="judul" placeholder="Judul article">
        </div>

        <div class="form-group">
            <label>DESCRIPTION</label>
            <textarea class="form-control" name="deskripsi" rows="15">{{ $article->deskripsi }}
            </textarea>
        </div>
</div>

<!-- membuat komponen sidebar yang berisi tombol untuk upload article -->
<div class="col-md-12 bg-white p-4" style="height:80px" !important>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-primary col-md-3" value="UPDATE">
    </div>
</div>
</form>
@endsection