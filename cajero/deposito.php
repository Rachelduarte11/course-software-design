<?php

require 'db.php';

if( $_SERVER ['REQUEST_METHOD']==='POST'){

    $monto = $_POST['monto'];
    $moneda = $_POST['moneda'];

    if($moneda == 'soles'){
        //                                       opera. matematica
        $sql = "UPDATE cuentas SET saldo_soles = saldo_soles + ?  WHERE id = 1";
    } else{
        $sql = "UPDATE cuentas SET saldo_dolares = saldo_dolares + ?  WHERE id = 1";
    }

    $calculo = $conexion->prepare($sql);

    //Vinculamos la variable monto
    //bind_param 2 parametros 1. tipo de variable "s" string , para numeros "d" 2.variable
    //pasa como numero la variable monto
    $calculo->bind_param("d", $monto);

    if($calculo->execute()){
        echo "Depósito Realizado Satisfactoriamente";
    }else{
        echo "¡ERROR! El depósito no ha sido realizado";
    }

}

?>
/*
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Depósito</title>
    <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/formulario.css">
</head>
<body>


<div class="container">
        <div class="contenido">
            <div class="left2"></div>
            <div class="right">
            <form action="deposito.php" method="POST">
                <h1>MODÚLO DE DEPÓSITO</h1>
                <label><i class="fa-solid fa-sack-dollar"></i> Monto:</label>
                <input type="number" name="monto" id="monto" required>
                <br>
                <label><i class="fa-regular fa-money-bill-1"></i> Moneda:</label>

                <select name="moneda" id="moneda" class="list" > 
                    <option value="soles">Soles</option>
                    <option value="dolares">Dólares</option>
                </select>
                <br>

                <input type="submit" class="btn" value="Realizar Depósito">
    
                <a href="inicio.php" class="btn">Volver</a>

            </form>
            </div>
        </div>

</div>



</body>
</html>*/ -->