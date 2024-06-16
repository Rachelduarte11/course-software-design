<?php


?>
<h1>MÓDULO DE RETIRO</h1>
<form action="retiro.php" method="POST">
    <label for="">Monto: </label>
    <input type="number" name="monto" id="monto" required>

    <label for="">Moneda: </label>
    <select name="moneda" id="moneda">
        <option value="soles">Soles</option>
        <option value="dolares">Dolares</option>
    </select>

    <input type="submit" value="Realizar retiro">
</form>