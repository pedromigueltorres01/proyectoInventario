<?php
 session_start();
 include('../../controllers/validarSessActiva.php');
 verificar_sessionNuevo_usuario()
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
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Santidad a Jehová <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
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
							<a href="nuevo_usuario.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> GESTOR DE USUARIOS</a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Gestion  <small>de Usuarios</small></h1>
			</div>
			<p class="lead">
		</div>

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

		<div class="container-fluid">
			<form class="well" onsubmit="event.preventDefault();onFormSubmit();">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="form-group label-floating">
							<span class="control-label">Ingresa la cédula</span>
							<input class="form-control" id="id_usuario" type="text" name="search_admin_init" required="">
						</div>
					</div>
					<div class="col-xs-12">
						<p class="text-center">
							<button type="submit" id="id_usuario" value="buscar" name="busca_especifica" onclick="buscar_usuario();" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
			  		</a>
						</p>
					</div>
				</div>
			</form>
		</div>
<div id="info"></div>
		
	</section>

	<!--====== Scripts -->
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/sweetalert2.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/ripples.min.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
	<script src="../../js/deleteAjax.js"></script>
	<script>
	<script>
		$.material.init();
	</script>
	<script>
	var resultado = document.getElementById("info");
    function buscar_usuario(){      
        var xmlhttp;
    if(window.XMLHttpRequest)
            {
                    xmlhttp =new XMLHttpRequest();
            }else
            {
                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
            }
    			var id = document.getElementById('id_usuario').value;
  				var informacionDelUsuario ="id_usuario="+id;
    			xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState  === 4 && xmlhttp.status === 200)
        {  
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    } 
   	 xmlhttp.open("POST", "../../controllers/gestor_usuario.php", true);
   	 xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  	 xmlhttp.send(informacionDelUsuario);
	}
	function recuperar(id){
	
	 var xmlhttp;
		    if(window.XMLHttpRequest)
		       {
		                xmlhttp =new XMLHttpRequest();
		         }else
		         {
		              xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 		} 
		 		var respuesta = confirm('¿Está seguro que desea Recuperar?');
            if (respuesta=== false) {
            
                return false;
            }      

		 		xmlhttp.onreadystatechange= function(){
		 	if (this.readyState  === 4 && this.status === 200) {
		 		buscar_usuario();
		 	}
		 }
		 var recuperar="recuperara"
		 	xmlhttp.open("GET", "../../controllers/gestor_usuario.php?Recuperar="+recuperar+"&id="+id, true);
		 	xmlhttp.send();

	
}
				
				</script>
</body>
</html>