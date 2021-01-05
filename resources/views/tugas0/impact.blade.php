@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component2.css" />
@endsection
@section('javascript')
<script src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-7243260-2']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
@endsection
@section('judulhalaman', 'Impact')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
	<p style="color:black;">
    Minimize the risk of spread coronavirus
    Simplify the process of recruitment
    No need to apply multiple times
    Can get work or job quickly 
    </p>
    <br/>
	<br/>
	<br/>
	<div>
		<button class="cn-button" id="cn-button">+</button>
		<div class="cn-wrapper" id="cn-wrapper">
			<ul>
			  <li><a href="{{url('/about')}}"><span>about</span></a></li>
			  <li><a href="{{url('/background')}}"><span>background</span></a></li>
			  <li><a href="{{url('/impact')}}"><span>impact</span></a></li>
			  <li><a href="{{url('/method')}}"><span>method</span></a></li>
			 </ul>
		</div>
		<div id="cn-overlay" class="cn-overlay"></div>
	</div>
		<!-- End Nav Structure -->

<script src="js/polyfills.js"></script>
<script src="js/demo2.js"></script>
    
@endsection