var resultado = document.getElementById("info");

function guardar(){
			var xmlhttp;
		

    if(window.XMLHttpRequest)
            {
                    xmlhttp =new XMLHttpRequest();
            }else
            {
                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
            }
            

	var input =document.formulario.optionsPrivilegio;
	for (var i = 0; i < input.length; i++) {
		if (input[i].checked) {
			var Perfil= input[i].value;
		}
		
	}
	
	
   
  
    var a = document.getElementById("cedula").value;
    var b = document.getElementById("usuario").value;
    var c = document.getElementById("pass1").value;
    var d = document.getElementById("pass2").value;
    var e =document.getElementById("registrarUsu").value;
    if (a==="") {
        alert("El campo Cédula es obligatorio.");
        document.getElementById("cedula").focus();
        return false;
    }if (b==="") {
        alert("El campo Usuario es obligatorio.");
        document.getElementById("usuario").focus();
        return false;
    }if (c==="") {
        alert("El campo Contraseña es obligatorio.");
        document.getElementById("pass1").focus();
        return false;
    }if (d==="") {
        alert("Confirme la Contraseña.");
        document.getElementById("pass2").focus();
        return false;
    }
    if (c!=d) {
        alert("Las Contraseñas no coinciden.");
        document.getElementById("pass1").focus();
        return false;
    }
    if(Perfil===undefined){
        alert("El campo Privilegios es obligatorio.");
        return false;
    }
        


   var informacionDelUsuario =
   "cedula="+a+
   "&usuario="+b+
   "&pass1="+c+
   "&registrarUsu="+e+
   "&perfil="+Perfil;
    xmlhttp.onreadystatechange = function(){
        if(this.readyState  === 4 && this.status === 200){  
            var mensaje = this.responseText;
            resultado.innerHTML = mensaje;
        }
    } 
    xmlhttp.open("POST", "../../controllers/gestor_usuario.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(informacionDelUsuario);
	}
   
		
		 
   