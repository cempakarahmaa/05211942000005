@extends('template')
@section('style')
@section('style')
<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/sendit.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/back.css') }}">
@endsection
@section('javascript')
   <script src="{{ asset('js/datetimepicker_css.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/navbar.js') }}" type="text/javascript"></script>	
@endsection

@endsection
@section('judulhalaman','Tambah Absen Pegawai')
@section('content')
	<p></p>
	<p></p>
	<a class="button" href="{{ url('/absen') }}"><span> Kembali</span></a>
	<form class="form" action="{{ url('/absen/store') }}" method="post">
		{{ csrf_field() }}
		<div class="box">
			<div class="box-1">
				<div class="form-group">
					<label for="IDPegawai">ID Pegawai</label>
					<select id="IDPegawai" name="IDPegawai" class="form-control ">
						@foreach($pegawai as $p)
							<option value="{{ $p->pegawai_id}}">{{ $p->pegawai_nama}}</option>
						 @endforeach
					</select>
					<span></span>
				</div>
			</div>
			<div class="box-1">
				<div class="form-group">
					<label for="tanggal">Tanggal </label>
					<div class="input-group date"> 
							<span class="input-group-prepend"> 
								<span class="input-group-text"> 
									<i class="fa fa-calendar" onclick="javascript:NewCssCal ('demo3','yyyyMMdd','dropdown',true,'24',true)"></i> 
								</span> 
							</span> 
							<input type="datetime" class="form-control" required="required" id="demo3" name="Tanggal"> 
				    </div> 
					<br/> 
					<span></span>
				</div>
			</div>
			<div class="box-1">
				<div class="form-group">
					<label for="Status">Status</label>
					<input type="text" class="form-control" required="required" name="Status">
					<span></span>
				</div>
			</div>
			<input type="submit" value="Simpan Data" >
	    </div>
	</form>
@endsection
