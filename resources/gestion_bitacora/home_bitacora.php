<?php
 session_start();

 include('../../controllers/validarSessActiva.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
	
</head>

<body>
	<script type="text/javascript">
		function confirmarSalir(){
			var respuesta = confirm('¿Está seguro que desea Salir?');
			if (respuesta=== true) {
				
	
//alert('hi');

		var ajaxRequest = new XMLHttpRequest();
		/*
		onreadystatechange= se encarga de prosesar la respuesta enviada por el servidor.
		*/
		ajaxRequest.onreadystatechange =function(){
			
			if (ajaxRequest.readyState == 4  && ajaxRequest.status == 200) {
					/*
					state= verifica el estatus de pa petición, cuando es= 200, significa que es exitosa...
					*/


					//aqui se accede al div donde se muestra la información
					document.getElementById("info").innerHTML =ajaxRequest.responseText;

			}
		}
	

	ajaxRequest.open("GET","../validarSessActiva.php",true);
	ajaxRequest.send();
return true;
				
			}else{

				return false;
			}

		}
	</script>

	<!-- caja -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--Titulo -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Santidad a Jehová <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- Menu de conf. -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../../assets/img/logoSantidad.JPG" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php echo $_SESSION['nombre']; echo $_SESSION['apellido'];?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li >
						<a href="#!" id="contenedor" title="Salir del sistema" class="btn-exit-system" onclick="return confirmarSalir();">
							
							<i class="zmdi zmdi-power" ></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- Menu de Proceso -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> USUARIOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="gestor_usuario/nuevo_usuario.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> GESTOR DE USUARIOS</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
		</div>
	</section>

	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Contenido -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> GESTOR <small> DE BITÁCORA</small></h1>
			</div>
			<p class="lead">
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="#" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO MIEMBROS
			  		</a>
			  	</li>
			  	<li>
			  		<a href="listar_miembro">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE MIEMBROS
			  		</a>
			  	</li>
			  	<li>
			  		<a href="buscar_miembro" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR MIEMBROS
			  		</a>
			  	</li>
			  	
			</ul>
		</div>

	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>