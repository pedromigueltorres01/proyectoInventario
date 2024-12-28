<?php
 session_start();

 include('../../controllers/validarSessActiva.php');
 //verificar_session();
 
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>GESTION DE USUARIO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
	<link rel="stylesheet" href="../../css/respuesta.css">
</head>
<body>
	<!-- Caja -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--Titulo -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Santidad a Jehová <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- menu conf. -->
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

	<!-- Pestaña respon.-->
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registrar  <small> Nuevo Miembro</small></h1>
			</div>
			<p class="lead">
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li title="Registrar nuevo miembro">
			  		<a href="#" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Consultar miembros.">
			  		<a href="listar_miembro">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Registrar una observación a miembro.">
			  		<a href="registrar_Observacion_miembro" class="btn btn-info">
			  			<i class="zmdi zmdi-plus" ></i> &nbsp; REGISTAR OBSERBACIÓN
			  		</a>
			  	</li>
			  	<li title="Consultar miembro.">
			  		<a href="buscar_miembro"  >
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR MIEMBROS
			  		</a>
			  	</li>
			  	<li title="Consultar miembro.">
			  		<a href="listar_obsevaciones" class="btn btn-info" >
			  		<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp;LISTAR OBSERVACIONES
			  		</a>
			  	</li>
			</ul>
		</div>

		<!-- Panel nuevo USUARIO -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO MIEMBRO</h3>
				</div>
				<div class="panel-body">
					<form action="" method="post" name="formulario" onsubmit="event.preventDefault();onFormSubmit();">
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>

				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12">
								    	<div class="form-group label-floating">
										  	<label class="control-label">CEDULA *</label>
										  	<input pattern="[0-9-]{1,30}" class="form-control" id="cedula"  type="text" name="dni-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Nombres *</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" id="nombre" type="text" name="nombre-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Apellidos *</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" id="apellido" type="text" name="apellido-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Teléfono</label>
										  	<input pattern="[0-9+]{1,15}" class="form-control" id="telefono" type="text" name="telefono-reg" maxlength="15">
										</div>
				    				</div>
				    				<div class="col-xs-12">
										<div class="form-group">
											<label class="control-label">Genero</label>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="optionsGenero" id="optionsRadios1" value="M" checked="optionsGenero">
													<i class="zmdi zmdi-male-alt"></i> &nbsp; Masculino
												</label>
											</div>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="optionsGenero" id="optionsRadios2" value="F">
													<i class="zmdi zmdi-female"></i> &nbsp; Femenino
												</label>
											</div>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
				    	<br>
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-key"></i> &nbsp; Ubicación</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12">
							    		<div class="form-group label-floating">
										  	<label class="control-label">Dirección *</label>
										  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñllLL' ']{1,88}" class="form-control" id="direccion" type="text" name="ubicacion" required="" maxlength="88">
										</div>
				    				</div>

				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating"> 
										<label class="control-label">Fecha de Nacimiento *</label>
										<br>
											<input  class="form-control" type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" autofocus required  /><span class="barra"></span></div>
									</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	 <label class="control-label">Fecha de miembro activo en la iglesia *</label>
										  	 <br>
												<input  class="form-control" type="date" name="Fecha_ingreso" id="Fecha_Ingreso" autofocus required  /><span class="barra"></span></div>
										</div>
										</div>
										<div>
										<p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" class="btn btn-info btn-raised btn-sm" id="guardar" value="insertMiembro" onclick="RegistrarMiembro();" name="guardar"><i class="zmdi zmdi-floppy" ></i> Guardar Datos</button>
					    </p>
				    				</div>
				    				

				    
				    	
					    
				    </form>
<div id="salida"></div>
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
	<script src="../../js/registrarMiembro.js"></script>
	<script>
		$.material.init();
	</script>
	<script type="text/javascript">
		var resultado= document.getElementById("info");
		function ajax_get_json(){

			var ajax_json_cristo;
			/*Válidando el navegador*/
			if(window.XMLHttpRequest)
			{
					ajax_json_cristo =new XMLHttpRequest();
			}else
			{
				ajax_json_cristo =new	ActiveXObject("Microsoft.XMLHTTP");
			}
			/*
			onreadystatechange procesa la respuesta enviadapor el servdor
			*/
			ajax_json_cristo.onreadystatechange =function(){
				if(ajax_json_cristo.readyState===4 && ajax_json_cristo.status===200)
				{
					/*
					paso la información y la convierto en una cadena que la contiene la variable datos*/
				  datos=JSON.parse(ajax_json_cristo.responseText);

				  //aqui valido que  solo se muestre una sola vez la informacion...
				  
				  if (resultado.innerHTML==="") {
				  for (var i in datos) {
				  	//aqui concateno los datos
				  	resultado.innerHTML += i + ":" + datos[i] + "<br/>"
				  }

				  }
				}

			}
			ajax_json_cristo.open("GET","../DATOS/datos.json",true);
			ajax_json_cristo.send();

		}

	</script>
</body>
</html>