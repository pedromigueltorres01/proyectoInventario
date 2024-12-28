<!DOCTYPE html>
<html lang="es">
<head>
	<title>Santidad a Jehová</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
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
			  		<a href="lista_usuario.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE DE USUARIOS
			  		</a>
			  	</li>
			  	<li>
			  		<a href="buscar_usuario1.php" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR USUARIO
			  		</a>
			  	</li>
			</ul>
		</div>

		
			
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
	<script>
		$.material.init();
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
    var a = document.getElementById("id_usuario").value;
    var h = document.getElementById("busca_especifica").value;
 

    var informacionDelUsuario ="buscar="+a+"&consultar1="+h;
   
    
 
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState  === 4 && xmlhttp.status === 200){  
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;

        }
    } 
    xmlhttp.open("POST", "../../controllers/gestor_usuario.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(informacionDelUsuario);

}
  function eliminar(){
  	var elimi=document.getElementById('eliminar').value;
  	
  	alert(elimi);
  }  
	</script>
</body>
</html>