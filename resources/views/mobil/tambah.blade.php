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
@section('judulhalaman','Tambah  Data Mobil')
@section('content')
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/mobil') }}"><span> Kembali</span></a>
	<br/>
	<br/>
	<form class="form-style-7" action="{{ url('/mobil/store') }}" method="post">
		{{ csrf_field() }}
		<ul>
			<li>
				<label for="merkmobil">Merk Mobil</label>
				<input type="text" required="required" name="merkmobil"> <br/>
				<span></span>
			</li>
			<li>
				<label for="stockmobil">Stock Mobil </label>
				<input type="number" required="required" name="stockmobil">
				<span></span>
			</li>
			<li>
				<label for="tersedia">Tersedia</label>
				<input type="text" required="required" name="tersedia">
				<span></span>
			</li>
			<li>
				<input type="submit" value="Simpan Data" >
			</li>
	   </ul>
	</form>
@endsection
