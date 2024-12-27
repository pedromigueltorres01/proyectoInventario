var resultado1 = document.getElementById("salida");
function RegistrarMiembro(){
	
	 var xmlhttp;
		    if(window.XMLHttpRequest)
		       {
		                xmlhttp =new XMLHttpRequest();
		         }else
		         {
		              xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 		} 

		 		var input =document.formulario.optionsGenero;

	for (var i = 0; i < input.length; i++) {

		if (input[i].checked) {
			var sexo= input[i].value;
		}
		
	}
	
		 		
		 		var cedula = document.getElementById("cedula").value;
		 		var nombre = document.getElementById("nombre").value;
		 		var apellido = document.getElementById("apellido").value;
		 		var telefono = document.getElementById("telefono").value;
		 		var direccion = document.getElementById("direccion").value;
		 		var fechaNacimiemto = document.getElementById("Fecha_Nacimiento").value;
		 		var fechaActivo = document.getElementById("Fecha_Ingreso").value;
		 		var guardar= document.getElementById("guardar").value;
		 		var datosMiembro="cedula="+cedula+
		 		"&nombre="+nombre+
		 		"&apellido="+apellido+
		 		"&telefono="+telefono+
		 		"&direccion="+direccion+
		 		"&sexo="+sexo+
		 		"&fechaNacimiemto="+fechaNacimiemto+
		 		"&fechaActivo="+fechaActivo+
		 		"&guardarNewMiembro="+guardar;
		 		

		 	xmlhttp.onreadystatechange = function(){
        if(this.readyState  === 4 && this.status === 200){  
            var mensaje = this.responseText;
            resultado1.innerHTML = mensaje;

        }
    }
	xmlhttp.open("POST", "../../controllers/addNewMiembro.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(datosMiembro);


}