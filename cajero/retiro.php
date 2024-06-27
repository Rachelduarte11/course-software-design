<?php

require 'db.php';

if( $_SERVER ['REQUEST_METHOD']==='POST'){

    $monto = $_POST['monto'];
    $moneda = $_POST['moneda'];

    if($moneda == 'soles'){
        //                                       opera. matematica
        $sql = "UPDATE cuentas SET saldo_soles = saldo_soles - ?  WHERE id = 1";
    } else{
        $sql = "UPDATE cuentas SET saldo_dolares = saldo_dolares - ?  WHERE id = 1";
    }

    $calculo = $conexion->prepare($sql);

    //Vinculamos la variable monto
    //bind_param 2 parametros 1. tipo de variable "s" string , para numeros "d" 2.variable
    //pasa como numero la variable monto
    $calculo->bind_param("d", $monto);

    if($calculo->execute()){
        echo "Retiro Realizado Satisfactoriamente";
    }else{
        echo "¡ERROR! El retiro no ha sido realizado";
    }

}

?>