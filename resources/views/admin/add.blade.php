@extends('master.master-admin')

@section('content')
<style>
  h1 {
    font-size: 25px;
    font-weight: bold;
  }
</style>

<h1>ADD ARTICLE</h1>
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
<div class="col-sm-12 bg-white p-4">
  <form method="post" action="/add_process" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>TITLE</label>
      <input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
    </div>
    <div class="form-group">
      <label>DESCRIPTION</label>
      <textarea class="form-control " rows="15" name="deskripsi" placeholder="Isi Artikel"></textarea>
    </div>
    <div class="form-group">
      <div style="position:relative;">
        <a class='btn btn-info' href='javascript:;'>
          Choose Image...
          <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file" size="40" onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
      </div>
    </div>
</div>


<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->

<div class="col-sm-12 bg-white p-4" style="height:100px !important">
  <div class="form-group">
    <input type="submit" class="form-control btn btn-primary col-sm-12" value="UPLOAD" !important">
  </div>
</div>
</form>
<script>
  $("#files").change(function() {
    filename = this.files[0].name
    console.log(filename);
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection