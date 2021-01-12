@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css') }}">
@endsection

@section('judulhalaman','Data Nilai Kuliah')
	@section('content')
			<div class="form-group"> </div>
				<form action="{{ url('/nilaikuliah/cari') }}" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari nilaikuliah .." value="{{ old('cari') }}">
					<button class="btn btn-primary ml-3" type="submit"><i class="fa fa-search"></i></button>
				</form>
                <br>
                <a class="btn btn-success btn-sm" href= "{{ url('/nilaikuliah/tambah') }}"> + Tambah Data</a>
            
                <br/>
				<br/>

				<table class="pegawai-table pegawai-table-horizontal pegawai-table-highlight table-center">
					<thead>
					<tr>
						<th>NRP</th>
						<th>Nilai Angka</th>
						<th>SKS</th>
						<th>Nilai Huruf</th>
						<th>Bobot</th>
						<th>Opsi</th>
					</tr>
					</thead>
					@foreach($nilaikuliah as $n)
					<tr>
						<td>{{ $n->NRP }}</td>
						<td>{{ $n->NilaiAngka }}</td>
						<td>{{ $n->SKS }}</td>
						<td>@if(($n->NilaiAngka)<=40)D
							@elseif (($n->NilaiAngka)>=41&&($n->NilaiAngka)<=60)C
							@elseif (($n->NilaiAngka)>=61&&($n->NilaiAngka)<=80)B
							@elseif (($n->NilaiAngka)>=81) A
							@endif
						</td>
						<td>{{ $n->NilaiAngka * $n->SKS }}</td>
						<td>
							<a class="btn btn-danger btn-sm text-light" href="{{ url('/nilaikuliah/hapus/' . $n->ID) }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $nilaikuliah->currentPage() }} <br/>
				Jumlah Data : {{ $nilaikuliah->total() }} <br/>
				Data Per Halaman : {{ $nilaikuliah->perPage() }} <br/>
				<br/>
				<div class="pagination justify-content-center " >
						{{$nilaikuliah->links() }}
				</div>
@endsection
