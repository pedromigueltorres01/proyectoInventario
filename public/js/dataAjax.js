var resultado = document.getElementById("info");
	function ajax_post(){
		 var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 }
		    xmlhttp.onreadystatechange = function(){
		        if(this.readyState  === 4 && this.status === 200){           
		            resultado.innerHTML = xmlhttp.responseText;
		        }
		    } 
		    xmlhttp.open("GET", "../../controllers/gestor_usuario.php?personas="+"personas", true);
		    xmlhttp.send();   
} //envoca la la funtion ajax_post();
ajax_post();
function editarUsuario(usuarioId){	
	var cedulaId     = "cedulaId"+usuarioId;	
	var nombreId     ="nombreId"+usuarioId;
	var apellidoId   ="apellidoId"+usuarioId;
	var telefonoId   ="telefonoId"+usuarioId;
	var actualizar ="actualizar"+usuarioId;
	var eliminar   ="eliminar"+ usuarioId;
	var perfilId	   ="cargoId"+ usuarioId;
	var editarNombreId = nombreId + "-editar";
	var editarApellidoId = apellidoId + "-editar";
	var editarTelefonoId = telefonoId + "-editar";
	var editarPerfilId = perfilId + "-editar";

var nombreDelUsuario =document.getElementById(nombreId).innerHTML;
var apellidoDelUsuario =document.getElementById(apellidoId).innerHTML;
var telefonoDelUsuario =document.getElementById(telefonoId).innerHTML;
var pefilDelUsuario =document.getElementById(perfilId).innerHTML;

	var parent =document.querySelector("#" + nombreId);	
	var parent1 =document.querySelector("#" + apellidoId);
	var parent2 =document.querySelector("#" + telefonoId);
	
	
	if (parent.querySelector('#'+ editarNombreId)=== null) {
		document.getElementById(nombreId).innerHTML=
		'<input type="text" id="'+editarNombreId+'" value="'+nombreDelUsuario+'"/>';

		
		
			document.getElementById(apellidoId).innerHTML=
			'<input type="text" id="'+editarApellidoId+'" value="'+apellidoDelUsuario+'"/>';



document.getElementById(perfilId).innerHTML='<select type="text"  id="'+editarPerfilId+'"  autofocus required></span> <option value="'+pefilDelUsuario+'">'+pefilDelUsuario+'</option><option value="1">ADMINISTRADOR</option><option value="2">PASTOR</option><option value="3">SECRETARIA</option> </select> ';

		
			document.getElementById(telefonoId).innerHTML=
			'<input type="text" id="'+editarTelefonoId+'" value="'+telefonoDelUsuario+'"/>';


		
		
		document.getElementById(eliminar).disabled="true";
		document.getElementById(actualizar).style.display="block";
		

	}
}

function Actualiza(id){

	 var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 } 
		 var nombre= document.getElementById("nombreId"+id+"-editar").value;
		 var apellido= document.getElementById("apellidoId"+id+"-editar").value;
		 var perfil= document.getElementById("cargoId"+id+"-editar").value;
		 var telefono= document.getElementById("telefonoId"+id+"-editar").value;
		 if(nombre==="")
		 {
		 	alert("Ingrese el nombre");
		 	return false;
		 }
		 if(apellido==="")
		 {
		 	alert("Ingrese el apellido");
		 	return false;
		 }
		 if(perfil==="")
		 {
		 	alert("Ingrese el perfil");
		 	return false;
		 }

		 xmlhttp.onreadystatechange= function(){
		 	if (this.readyState  === 4 && this.status === 200) {
		 		ajax_post();
		 	}
		 }
		  
		 xmlhttp.open("GET", "../../controllers/gestor_usuario.php?update="+"update"+
		 	"&id="+id+
		 	"&nombre="+nombre+
		 	"&apellido="+apellido+
		 	"&perfil="+perfil+
		 	"&telefono="+telefono, true);
		 xmlhttp.send();
}
function dell(id){
	 var xmlhttp;
		    if(window.XMLHttpRequest)
		       {
		                xmlhttp =new XMLHttpRequest();
		         }else
		         {
		              xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 		} 
		 		var respuesta = confirm('¿Está seguro que desea Eliminar?');
            if (respuesta=== false) {
            
                return false;
            }             
		 		xmlhttp.onreadystatechange= function(){
		 	if (this.readyState  === 4 && this.status === 200) {
		 		ajax_post();
		 	}
		 }
		 	xmlhttp.open("GET", "../../controllers/gestor_usuario.php?delete="+"delete"+"&id="+id, true);
		 	xmlhttp.send();

	
}
