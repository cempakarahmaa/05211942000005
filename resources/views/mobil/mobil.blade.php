@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css') }}">
@endsection

@section('judulhalaman','Data Mobil')
	@section('content')
			<div class="form-group"> </div>
				<form action="{{ url('/mobil/cari') }}" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Merk Mobil .." value="{{ old('cari') }}">
					<button class="btn btn-primary ml-3" type="submit"><i class="fa fa-search"></i></button>
				</form>
                <br>
                <a class="btn btn-success btn-sm" href= "{{ url('/mobil/tambah') }}"> + Tambah Mobil Baru</a>
            
                <br/>
				<br/>

				<table class="pegawai-table pegawai-table-horizontal pegawai-table-highlight table-center">
					<thead>
					<tr>
						<th>Merk Mobil</th>
						<th>Stock Mobil</th>
						<th>Tersedia</th>
						<th>Opsi</th>
					</tr>
					</thead>
					@foreach($mobil as $m)
					<tr>
						<td>{{ $m->merkmobil }}</td>
						<td>{{ $m->stockmobil }}</td>
						<td>{{  $m->tersedia }}</td>
						<td>	
							<a class="btn btn-warning btn-sm text-light " href="{{ url('/mobil/edit/' . $m->kodemobil) }}">Edit</a>
							<a class="btn btn-danger btn-sm text-light" href="{{ url('/mobil/hapus/' . $m->kodemobil) }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $mobil->currentPage() }} <br/>
				Jumlah Data : {{ $mobil->total() }} <br/>
				Data Per Halaman : {{ $mobil->perPage() }} <br/>
				<br/>
				<div class="pagination justify-content-center " >
						{{ $mobil->links() }}
				</div>
@endsection
