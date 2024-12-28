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
            if (respuesta=== true) {
            }else{
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