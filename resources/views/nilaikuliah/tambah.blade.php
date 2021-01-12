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
@section('judulhalaman','Tambah Data')
@section('content')
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/nilaikuliah') }}"><span> Kembali</span></a>
	<br/>
	<br/>
	<form class="form-style-7" action="{{ url('/nilaikuliah/store') }}" method="post">
		{{ csrf_field() }}
		<ul>
			<li>
				<label for="NRP">NRP</label>
				<input type="text" name="NRP" required="required">
				<span></span>
			</li>
			<li>
				<label for="NilaiAngka">Nilai Angka </label>
				<input type="text" name="NilaiAngka" required="required"> <br/>
				<span></span>
			</li>
			<li>
				<label for="SKS">SKS</label>
				<input type="text" name="SKS" required="required">
				<span></span>
			</li>
			<li>
				<input type="submit" value="Simpan Data" >
			</li>
	   </ul>
	</form>
@endsection
