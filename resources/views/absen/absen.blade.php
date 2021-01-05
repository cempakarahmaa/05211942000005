@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css') }}">
@endsection

@section('judulhalaman','Absen Pegawai')
	@section('content')
			<div class="form-group"> </div>
				<form action="{{ url('/absen/cari') }}" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Absen Pegawai .." value="{{ old('cari') }}">
					<button class="btn btn-primary ml-3" type="submit"><i class="fa fa-search"></i></button>
				</form>
                <br>
                <a class="btn btn-success btn-sm" href= "{{ url('/absen/tambah') }}"> + Tambah Absen Baru</a>
            
                <br/>
				<br/>

				<table class="pegawai-table pegawai-table-horizontal pegawai-table-highlight table-center">
					<thead>
					<tr>
						<th>IDPegawai</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Opsi</th>
					</tr>
					</thead>
					@foreach($absen as $a)
					<tr>
						<td>{{ $a->IDPegawai }}</td>
						<td>{{ $a->Tanggal }}</td>
						<td>{{ $a->Status }}</td>
						<td>	
							<a class="btn btn-warning btn-sm text-light " href="{{ url('/absen/edit/' . $a->ID) }}">Edit</a>
							<a class="btn btn-danger btn-sm text-light" href="{{ url('/absen/hapus/' . $a->ID) }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $absen->currentPage() }} <br/>
				Jumlah Data : {{ $absen->total() }} <br/>
				Data Per Halaman : {{ $absen->perPage() }} <br/>
				<br/>
				<div class="pagination justify-content-center " >
						{{ $absen->links() }}
				</div>
@endsection
