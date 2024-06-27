<?php
//DECLARAR VARIABLES
$servidor = "localhost";
$usuario = "root";
$password ="1234";
$db = "cajero";

//CADENA DE CONEXIÓN 
$conexion = new mysqli($servidor, $usuario, $password, $db, 3306); //especificar el puerto en caso no sea el predeterminado que es el 3306

//MENSAJE DE ERROR
if($conexion -> connect_error){
    echo("Conexión errónea");
}

?>