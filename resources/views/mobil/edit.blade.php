@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
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

@section('content')
	@foreach($mobil as $m)
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/mobil') }}"><span> Kembali</span></a>
	<br/>
	<br/>
	<form class="form-style-7" action="{{ url('/mobil/update') }}" method="post">
		{{ csrf_field() }}
		<ul>
			<li>
				<label for="kodemobil">Kode Mobil </label>
				<input type="text" required="required" name="kodemobil" value="{{ $m->kodemobil }}">
				<span></span>
			</li>
			<li>
				<input type="hidden" name="id" value="{{ $m->kodemobil}}">
				<label for="merkmobil">Merk Mobil</label>
				<input type="text" required="required" name="merkmobil" value="{{ $m->merkmobil }}"> <br/>
				<span></span>
			</li>
			<li>
				<label for="stockmobil">Stock Mobil </label>
				<input type="number" required="required" name="stockmobil" value="{{ $m->stockmobil }}">
				<span></span>
			</li>
			<li>
				<label for="tersedia">Tersedia</label>
				<input type="text" required="required" name="tersedia" value="{{ $m->tersedia }}">
				<span></span>
			</li>

			<li>
				<input type="submit" value="Simpan Data" >
			</li>
	   </ul>
	</form>
	@endforeach
@endsection

