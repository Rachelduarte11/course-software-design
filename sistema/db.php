<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "sistemas";

$conexion = new mysqli($servidor, $usuario, $password, $db);

if($conexion -> connect_error){
    echo("conexion errónea");
}
?>
