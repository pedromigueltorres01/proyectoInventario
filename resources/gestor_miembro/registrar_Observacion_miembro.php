<!DOCTYPE html>
<html lang="es">
<head>
	<title>Santidad a Jehová</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css"> 
	<link rel="stylesheet" href="../../css/respuesta.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Santidad a Jehová<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../../assets/img/logoSantidad.JPG" alt="UserIcon">
					<figcaption class="text-center text-titles">Nombre de Usuario</figcaption>
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
							<a href="nuevo_usuario.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> GESTOR DE USUARIOS</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
		</div>
	</section>
	<!-- BUSQUEDA Y RESPON-->
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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registar una  <small>Observación a un Miembro</small></h1>
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

		<div class="container-fluid" id="div">
			<form class="well" onsubmit="event.preventDefault();onFormSubmit();">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="form-group label-floating">
							<span class="control-label">¿A quién estas buscando?</span>
							<input id="id_Miembro" placeholder="Escriba la cédula" class="form-control" type="text" name="search_admin_init" required="">
						</div>
					</div>
					<div class="col-xs-12">
						<p class="text-center">
							<button type="submit" onclick="Buscar();ocultar();" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
						</p>
					</div>
				</div>
			</form>
		</div>
<div id="info"></div>

		

		
		
		<!-- Panel listado de busqueda de administradores -->
<!--div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-search"></i> &nbsp; BUSCAR ADMINISTRADOR</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">DNI</th>
									<th class="text-center">NOMBRES</th>
									<th class="text-center">APELLIDOS</th>
									<th class="text-center">TELÉFONO</th>
									<th class="text-center">A. CUENTA</th>
									<th class="text-center">A. DATOS</th>
									<th class="text-center">ELIMINAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>7890987651</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>Telefono</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<form>
											<button type="submit" class="btn btn-danger btn-raised btn-xs">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>7890987651</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>Telefono</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<form>
											<button type="submit" class="btn btn-danger btn-raised btn-xs">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</form>
									</td>
								</tr>
							</tbody>
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
		</div>-->
	</section>

	<!--====== Scripts -->
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/sweetalert2.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/ripples.min.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
	<script src="../../js/controllerAjax.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>