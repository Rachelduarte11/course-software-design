<?php

require 'db.php';

// Inicializar $cuenta como null antes de la consulta
$cuenta = null;

$sql = "SELECT saldo_soles, saldo_dolares FROM cuentas WHERE id = 1"; 
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $cuenta = $resultado->fetch_assoc();
}

?>
<!-- La consulta la realizo en el inicio, dejo este archivo como plantilla -->