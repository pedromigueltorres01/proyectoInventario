<?php
//print_r($_POST);

    $nombre  = $_POST['consultar2'];
    
    if(empty($nombre)) {
        echo "ingrese su nombre";
    }
    else{
        echo "Gracias".$nombre;

 }   
?>
