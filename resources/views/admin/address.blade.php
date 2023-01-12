@extends('master.master-admin')

@section('content')

<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1>TRANSAKSI</h1>



    <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tabel Kategori</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
									
									<th>GAMBAR</th>
									<th>BARANG</th>
									<th>HARGA</th>
									<th>JUMLAH</th>
									<th>CATATANnnnnn</th>
									<th></th>
                                    <th>OPSI</th>
								</tr>
							</thead>
                            <tbody>

                @foreach($order as $o)
                <tr>
                    <td><img width="100px" src="{{ url('/images/'.$o->gambar) }}"></td>
                    <td>{{$o->nama_brg}}</td>
                    <td>{{$o->harga_brg}}</td>
                    <td>{{$o->jumlah_brg}}</td>
                    <td>{{$o->catatan}}</td>
                   
					
                 
                   
                    
                   
                </tr>
                @endforeach

               

            </tbody>
            
						</table>
                        
                        <div class="form-group row">
            <label class="col-form-label col-lg-2">Alamat</label>
            <div class="col-lg-10">
            <textarea class="form-control" name="harga_brg"></textarea>
        </div>
        </div>
					</div>
				</div>
 

@endsection