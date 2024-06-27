<?php

?>

<h2>MÓDULO DE CAMBIAR CLAVE</h2>

<form action="cambiarClave.php" method="POST">

    <label>Ingrese la Clave Actual: </label>
    <input type="password" name="claveActual" id= "claveActual" required>

    <label>Ingrese la nueva clave: </label>
    <input type="password" name="claveNueva" id= "claveNueva" required>

    <input type="submit" value="Cambiar Clave">
</form>