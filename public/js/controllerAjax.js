var resultado = document.getElementById("info");
function Buscar(){
	var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 }
		 var id =document.getElementById("id_Miembro").value;

		    xmlhttp.onreadystatechange = function(){
		        if(this.readyState  === 4 && this.status === 200){           
		            resultado.innerHTML = xmlhttp.responseText;
		        }
		    } 
		    xmlhttp.open("GET", "../../controllers/addNewMiembro.php?BuscarMiembroObser="+id, true);
		    xmlhttp.send(); 
}
function RegistrarObservacion(id){
	var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 }
		 var Observacion =document.getElementById("Descripcion").value;

		    xmlhttp.onreadystatechange = function(){
		        if(this.readyState  === 4 && this.status === 200){           
		            resultado.innerHTML = xmlhttp.responseText;
		        }
		    } 
		  xmlhttp.open("GET", "../../controllers/addNewMiembro.php?Observacion="+Observacion+"&id="+id, true);
		   xmlhttp.send(); 

	
}
function buscar_miembro(){
	var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 }
		 var id =document.getElementById("id_Miembro").value;

		    xmlhttp.onreadystatechange = function(){
		        if(this.readyState  === 4 && this.status === 200){           
		            resultado.innerHTML = xmlhttp.responseText;
		        }
		    } 
		    xmlhttp.open("GET", "../../controllers/addNewMiembro.php?BuscarObser="+id, true);
		    xmlhttp.send(); 
}
function ocultar(){
	var buscar =document.getElementById("id_Miembro").value;
	if (buscar==='' ) {
		alert('Ingrese la cédula.')
		return false;
	}
	document.getElementById("div").style.display="none";
	
}
