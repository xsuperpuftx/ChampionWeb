<?php
    $conexion= new mysqli("localhost", "root", "", "Aeromexico");
    if($conexion){
        echo "la gestion fue exitosa!";

    }else{
        echo "algo salio mal";
    }




?>