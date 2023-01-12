@extends('master.master-admin')

@section('content')
<style>
  h1 {
    font-size: 25px;
    font-weight: bold;
  }
</style>

<h1>INBOX</h1>
<div class="col-md-12 bg-white p-4">
  <div class="col-lg-12 mx-auto mt-0">
    <table class="table table-responsive-lg table-bordered table-hover text-nowrap ">
      <tr class="table-info">
        <th scope="col">NAMA</th>
        <th scope="col">EMAIL</th>
        <th scope="col">PESAN</th>
        <th scope="col" class="text-center">DELETE</th>
      </tr>
      @foreach($mailbox as $p)
      <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->pesan }}</td>
        <td align='center' width='100px'><a href="/admin/hapus/{{ $p->nama }}"><button class="btn btn-danger"><span class="fas fa-trash text-white"></a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection