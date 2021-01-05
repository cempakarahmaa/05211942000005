@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/tambah.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/back.css') }}">
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
@section('judulhalaman','Tambah Data Pegawai')
@section('content')
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/pegawai') }}"><span> Kembali</span></a>
	<br/>
	<br/>
	<form class="form-style-7" action="{{ url('/pegawai/store') }}" method="post">
		{{ csrf_field() }}
		<ul>
			<li>
				<label for="name">Nama</label>
				<input type="text" name="nama" required="required">
				<span></span>
			</li>
			<li>
				<label for="jabatan">Jabatan </label>
				<input type="text" name="jabatan" required="required"> <br/>
				<span></span>
			</li>
			<li>
				<label for="umur">Umur</label>
				<input type="number" name="umur" required="required">
				<span></span>
			</li>
			<li>
				<label for="alamat">Alamat</label>
				<textarea name="alamat" required="required"onkeyup="adjust_textarea(this)"></textarea>
				<span></span>
			</li>
			<li>
				<input type="submit" value="Simpan Data" >
			</li>
	   </ul>
	</form>
@endsection
