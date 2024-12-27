var resultado=document.getElementById("informacion");
function buscar(){
	 var xmlhttp;
		    if(window.XMLHttpRequest)
		            {
		                    xmlhttp =new XMLHttpRequest();
		            }else
		            {
		                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
		 }
		 
		 var id=document.getElementById("datosPersona").value;
		    xmlhttp.onreadystatechange = function(){
		        if(this.readyState  === 4 && this.status === 200){           
		            resultado.innerHTML = xmlhttp.responseText;
		        }
		    } 
		    xmlhttp.open("GET", "../../controllers/addNewMiembro.php?Idpersonas="+id, true);
		    xmlhttp.send();   

}
function ocultar(){
	var buscar=document.getElementById("datosPersona").value;
	if (buscar==='') {
		alert('Ingrese la cédula.')
		return false;
	}
	document.getElementById("div").style.display="none";
	
}
