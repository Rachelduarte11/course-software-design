<?php


?>
<h1>MÓDULO DE DEPÓSITO</h1>
<form action="deposito.php" method="POST">
    <label for="">Monto: </label>
    <input type="number" name="monto" id="monto" required>

    <label for="">Moneda: </label>
    <select name="moneda" id="moneda">
        <option value="soles">Soles</option>
        <option value="dolares">Dolares</option>
    </select>

    <input type="submit" value="Realizar deposito">
</form>