<?php
include("abre.php");

$cliente    =$_POST['cliente'];
$boleto     =$_POST['boleto'];
$destino    =$_POST['destino'];

$consulta = "INSERT INTO boletos(cliente, boleto, destino) VALUES('$cliente', '$boleto', '$destino')";

if($conexion->query($consulta) === TRUE){
    header("Location: index.php");
}else{
    echo "Error" .$consulta. "br" .$conexion->error;
}

$conexion->close();

?>