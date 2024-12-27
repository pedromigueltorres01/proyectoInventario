<?php
/* session_start();
 include('../../controllers/validarSessActiva.php');
 verificar_sessionNuevo_usuario()*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
</head>
<body>
	<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO</h3>
				</div>
				<div class="panel-body">
					<form action="" method="post" autocomplete="off">
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12">
								    	<div class="form-group label-floating">
										  	<label class="control-label">CEDULA *</label>
										  	<input pattern="[0-9-]{1,30}" class="form-control" type="text" name="dni-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Nombres *</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="nombre-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Apellidos *</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="apellido-reg" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Teléfono</label>
										  	<input pattern="[0-9+]{1,15}" class="form-control" type="text" name="telefono-reg" maxlength="15">
										</div>
				    				</div>
				    				<div class="col-xs-12">
										<div class="form-group">
											<label class="control-label">Genero</label>
											<div >
												<label>
													<input type="radio" name="optionsGenero" id="optionsRadios1" value="Masculino" checked="">
													<i class="zmdi zmdi-male-alt"></i> &nbsp; Masculino
												</label>
											</div>
											<div >
												<label>
													<input type="radio" name="optionsGenero" id="optionsRadios2" value="Femenino">
													<i class="zmdi zmdi-female"></i> &nbsp; Femenino
												</label>
											</div>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
				    	<br>
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12">
							    		<div class="form-group label-floating">
										  	<label class="control-label">Nombre de usuario *</label>
										  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text" name="usuario-reg" required="" maxlength="15">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Contraseña *</label>
										  	<input class="form-control" type="password" name="password1-reg" required="" maxlength="70">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Repita la contraseña *</label>
										  	<input class="form-control" type="password" name="password2-reg" required="" maxlength="70">
										</div>
				    				</div>
				    				
										</div>
				    				</div>
				    			</div>
				    		</div>

				    		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; CATEGORIA</h3>
				</div>
				    	</fieldset>
				    	<br>
				    	<fieldset>
				    		<center><legend><i class="zmdi zmdi-star"></i> &nbsp; Nivel de privilegios</legend></center>
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
					                        <div class="label label-info">Nive4 / SECRETARIA</div> Permiso para registro/consultas
					                    </p>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
										
										
									<div class="radio radio-primary">
										<label>

											
		<select class="btn btn-info btn-raised btn-sm" style="background: #088A85;color: #FFFFFF;" class="zmdi zmdi-star" name="optionsPrivilegio" id="optionsRadios2">
			<option value="0" class="zmdi zmdi-star">SELECCIONE</option>
			<option value="1" class="zmdi zmdi-star">ADMINISTRADOR</option>
			<option value="2" class="zmdi zmdi-star">PASTOR</option>
			<option value="3" class="zmdi zmdi-star">SECRETARIA</option>
		</select>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
					    <p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" onclick="guardar();" class="btn btn-info btn-raised btn-sm" name="guardar"><i class="zmdi zmdi-floppy" ></i> Guardar Datos</button>
					    </p>
				    </form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function guardar(){
				alert('hi');
			}
		</script>

</body>
</html>