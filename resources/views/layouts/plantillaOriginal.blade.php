<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.imagenCabecera{
			/*position: absolute;
  			right: 90%;*/
			width:120px;
			height: 70px;
    		/*border-radius:150px;*/
   		}
   		.cabecera
   		{
   			text-align: center;
   			font-size: x-large;
   			font-family: Tahoma, Gevena, sans-serif;
   			margin-bottom: 50px;
   			color:#8904B1;
   		}
   		.pie
   		{
   			text-align: center;
   			/*position: fixed;*/
   			bottom: 0px;
   			width: 100%;
   			font-size: 0.7em;
   			margin-bottom: 15px;
   		}.logoDTCPie
   		{
   			width:80px;
   			height:25px;
    		/*border-radius:150px;*/
    		
   		}
	</style>
</head>
<body>
	<div class="cabecera">
		@include("layouts.barraDeNavegacion")
		@yield("cabecera")
		
		
		@yield("contenido")
	</div>
	<div class="pie">
		@yield("pie")
		<img src="/images/logoJEMSFooter.JPEG" class="logoDTCPie" />
		<strong>Inversiones JEMS</strong> | TLF: +58 424-1567109 | Todos los derechos reservados.
		<img src="/images/logoJEMSFooter.JPEG" class="logoDTCPie" />
	</div>

</body>
</html>