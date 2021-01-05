@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/back.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
@section('javascript')
<script type="text/javascript">
	//auto expand textarea
	function adjust_textarea(h) {
		h.style.height = "20px";
		h.style.height = (h.scrollHeight)+"px";
	}
</script>
<script src="{{ asset('js/navbar.js') }}" type="text/javascript"></script>
	
@endsection

@section('content')
	@foreach($pegawai as $p)
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/pegawai') }}"><span> Kembali</span></a>
	<br/>
	<br/>
	<form class="form-style-7" action="{{ url('/pegawai/update') }}" method="post">
		{{ csrf_field() }}
		<ul>
			<li>
				<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
				<label for="name">Nama</label>
				<input type="text" readonly required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
				<span></span>
			</li>
			<li>
				<label for="jabatan">Jabatan </label>
				<input type="text" readonly required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
				<span></span>
			</li>
			<li>
				<label for="umur">Umur</label>
				<input type="number" readonly required="required" name="umur" value="{{ $p->pegawai_umur }}">
				<span></span>
			</li>
			<li>
				<label for="alamat">Alamat</label>
				<input type="text" readonly required="required" name="alamat" value="{{ $p->pegawai_alamat }}">
				<span></span>
			</li>
	   </ul>
	</form>
    @endforeach
    <br/>
        <div class="card">
            <div class="card-body">
                <h2  style="color:black;" class="text-center">Daftar Absen</h2>
                <table class="pegawai-table pegawai-table-horizontal pegawai-table-highlight table-center">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    @foreach($absen as $a)
                    <tr>
                        <td>{{ $a->Tanggal }}</td>
                        <td>{{ $a->Status }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
@endsection

