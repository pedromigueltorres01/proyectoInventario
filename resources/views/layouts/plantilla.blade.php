<!DOCTYPE html>
<html>
<head>
	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="icon" type="text/css" href="../assets/img/logoSantidad.jpg">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
	<script src="{{asset('js/jquery-3.2.1.js')}}"></script>

</head>
<body>
	<div class="cabecera">
		@include("layouts.menu")
		@yield("cabecera")
	
		@yield("contenido")

	</div>
	<div class="pie">
		@yield("pie")
		
	</div>
<!--====== Scripts -->
	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/material.min.js')}}"></script>
	<script src="{{asset('js/ripples.min.js')}}"></script>
	<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>