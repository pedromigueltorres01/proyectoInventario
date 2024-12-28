<?php
session_start();
 include('../../controllers/validarSessActiva.php');
// verificar_session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>GESTION DE USUARIO</title>
	<meta charset="UTF-8">
	<link rel="icon" type="text/css" href="../../assets/img/logoSantidad.jpg">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
	<link rel="stylesheet" href="../../css/respuesta.css">
	<!--<script src="../../js/jquery-3.2.1.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/modal.js"></script>
    <script src="../../js/usuario_crub.js"></script>-->
</head>
<body>
	<script type="text/javascript">
		function confirmarSalir(){
			var respuesta = confirm('¿Está seguro que desea Salir?');
			if (respuesta=== true) {				
				var resultado;
 				var xmlhttp;
   			 if(window.XMLHttpRequest)
            {
                    xmlhttp =new XMLHttpRequest();
            }else
            {
                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
            }	
				var confirmarPhp="salir_nuevo_usuario="+respuesta;
				xmlhttp.onreadystatechange =function(){

					if (xmlhttp.readyState===4 && xmlhttp.status===200) {
						var mensaje= responseText;
						resultado.innerHTML =mensaje;
					}
				}
	}else{
				return false;
			}
			xmlhttp.open("POST","../../controllers/salir.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(confirmarPhp);
			window.location="nuevo_usuario.php";
		}
	</script>
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
					<figcaption class="text-center text-titles"><?php echo $_SESSION['nombre'];?>&nbsp;&nbsp;<?php echo $_SESSION['apellido'];?></figcaption>
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
						<a href="#!" id="contenedor" title="Salir del sistema" class="btn-exit-system" onclick="return confirmarSalir();">
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
			<!-- En este div id="info"  muestro la respuesta delservidor-->
			<div id="infoma" ></div>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> REGISTRO <small> DE USUARIO</small></h1>
			</div>
			<p class="lead">
		</div>
klkl
		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="formularioN_Registro.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO
			  		</a>
			  	</li>
			  	<li>
			  		<a class="btn btn-success" href="listar_usuario.php"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE uSUARIOS</a>
			  	</li>
			  	<li>
			  		<a href="buscar_usuario1.php" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR USUARIO
			  		</a>
			  	</li>
			</ul>
		</div>

		<!-- Panel nuevo USUARIO -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO</h3>
				</div>
				<div class="panel-body">
					<form autocomplete="off" name="formulario" method="POST" onsubmit="event.preventDefault();onFormSubmit();">
				    	<fieldset>
				    	
				    		<div class="container-fluid">
				    			
				    	</fieldset>
				    	<br>
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12">
								    	<div class="form-group label-floating">
										  	<label class="control-label">CEDULA *</label>
										  	<input pattern="[0-9-]{1,30}" class="form-control" type="text" id="cedula" name="dni-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12">
							    		<div class="form-group label-floating">
										  	<label class="control-label">Nombre de usuario *</label>
										  	<input id="usuario" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text" name="usuario-reg" required="" maxlength="15">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Contraseña *</label>
										  	<input id="pass1" class="form-control" type="password" name="password1-reg" required="" maxlength="70">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Repita la contraseña *</label>
										  	<input id="pass2" class="form-control" type="password" name="password2-reg" required="" maxlength="70">
										</div>
				    				</div>
				    	</fieldset>
				    	<br>
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-star"></i> &nbsp; Nivel de privilegios</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12 col-sm-6">
							    		<p class="text-left">
					                        <div class="label label-success">Nivel 1 / ADMINISTRADOR</div> Control total del sistema
					                    </p>
					                    <p class="text-left">
					                        <div class="label label-primary">Nivel 2 / PASTOR</div> Control total del sistema
					                    </p>
					                    
					                    <p class="text-left">
					                        <div class="label label-info">Nive3 / SECRETARIA</div> Permiso para registro/consultas
					                    </p>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio"  name="optionsPrivilegio" id="optionsRadios1" value="1">
												<i class="zmdi zmdi-star"></i> &nbsp; ADMINISTRADOR
											</label>
										</div>
										<div class="radio radio-primary">
											<label>
												<input  type="radio" name="optionsPrivilegio" id="optionsRadios2" value="2">
												<i class="zmdi zmdi-star"></i> &nbsp; PASTOR
											</label>
										</div>
									
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="optionsPrivilegio" id="optionsRadios2" value="3">
												<i class="zmdi zmdi-star"></i> &nbsp; SECRETARIA
											</label>
				    				</div>
				    			</div>
				    		</div>
				    		</div>
				    				</div>
				    			</div>
				    		</div>
<div id="info"></div>
				    	</fieldset>
					    <p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" onclick="guardar();" id="registrarUsu" value="insert" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Datos</button>
					    </p>
					    
				    </form>
				    
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
	<script type="text/javascript" src="../../js/UserNew.js"></script>
	<script src="../../js/main.js"></script>
	<script>
		$.material.init();
		
	</script>
</body>
</html>