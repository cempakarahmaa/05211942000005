@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css') }}">
@endsection

@section('judulhalaman','Data Pegawai')
	@section('content')
			<div class="form-group"> </div>
				<form action="{{ url('/pegawai/cari') }}" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Data Pegawai .." value="{{ old('cari') }}">
					<button class="btn btn-primary ml-3" type="submit"><i class="fa fa-search"></i></button>
				</form>
                <br>
                <a class="btn btn-success btn-sm" href= "{{ url('/pegawai/tambah') }}"> + Tambah Pegawai Baru</a>
            
                <br/>
				<br/>

				<table class="pegawai-table pegawai-table-horizontal pegawai-table-highlight table-center">
					<thead>
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					</thead>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>	
							<a class="btn btn-warning btn-sm text-light " href="{{ url('/pegawai/edit/' . $p->pegawai_id) }}">Edit</a>
							<a class="btn btn-danger btn-sm text-light" href="{{ url('/pegawai/hapus/' . $p->pegawai_id) }}">Hapus</a>
							<a class="btn btn-danger btn-sm text-light" href="{{ url('/pegawai/read/' . $p->pegawai_id) }}">Details</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>
				<div class="pagination justify-content-center " >
						{{ $pegawai->links() }}
				</div>
@endsection
