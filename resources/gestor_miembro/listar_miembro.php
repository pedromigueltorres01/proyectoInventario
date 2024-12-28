<?php
 session_start();

 include('../../controllers/validarSessActiva.php');
 verificar_session();
 # Si la variable de consulta esta vacia, aqui se vuelve a realizar la consulta solo va en la vista consultar
 /*if (!isset($_GET["usu"])) {
 	# code...
 	header("Location:../../controllers/control.php?consultar=1");
 }


 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Santidad a Jehová</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
</head>
<body>
	<!-- caja -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--TITULO -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Santidad a Jehová <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- MENU CONF. -->
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
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- Menu de Proceso -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../home">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> USUARIOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="nuevo_usuario"><i class="zmdi zmdi-account zmdi-hc-fw"></i> GESTOR DE USUARIOS</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
		</div>
	</section>

	<!-- GESTOR DE BUSQUEDA Y RESPON.-->
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
		<!-- CONTENIDO DE PAGINA -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Lista de <small> todos los Miembros Activos</small></h1>
			</div>
			<p class="lead">
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li title="Registrar nuevo miembro">
			  		<a href="nuevo_miembro" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Consultar miembros.">
			  		<a href="listar_miembro">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Consultar miembro.">
			  		<a href="buscar_miembro" >
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Registrar una observación a miembro.">
			  		<a href="registrar_Observacion_miembro">
			  			<i class="zmdi zmdi-plus" ></i> &nbsp; REGISTAR OBSERBACIÓN
			  		</a>
			  	</li>
			  	<li title="Consultar miembro.">
			  		<a href="listar_obsevaciones" >
			  		<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp;LISTAR OBSERVACIONES
			  		</a>
			  	</li>
			</ul>
		</div>
		
		<!-- Panel listado de administradores -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE MIEMBRO</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						
							<div id="salida"></div>
						</table>
					</div>
					<nav class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="javascript:void(0)">«</a></li>
							<li class="active"><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">3</a></li>
							<li><a href="javascript:void(0)">4</a></li>
							<li><a href="javascript:void(0)">5</a></li>
							<li><a href="javascript:void(0)">»</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		
	</section>

	<!--====== Scripts -->
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/sweetalert2.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/ripples.min.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
	<script src="../../js/DataMimbros.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>