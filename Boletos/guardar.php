<?php
include("abre.php");

$nombre    =$_POST['nombre'];
$boleto     =$_POST['boleto'];
$destino    =$_POST['destino'];

$consulta = "INSERT INTO boletos(nombre, boleto, destino) VALUES('$nombre', '$boleto', '$destino')";

if($conexion->query($consulta) === TRUE){
    header("Location: index.php");
}else{
    echo "Error" .$consulta. "br" .$conexion->error;
}

$conexion->close();

?>