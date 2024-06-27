<?php

//indicar inicio de sesión
session_start();
//Este comando sirve para indicar
//que se requiere el archivo db.php
//para que login.php funciones
require 'db.php'

if( $_SERVER ['REQUEST_METHOD']==='POST'){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    //consulta
    $sql = "SELECT * FROM usuarios WHERE nombre = ?";
    $estado = $conexion->prepare($sql);
    //ejecutar consulta
    $estado-> execute();
    $resultado= $estado -> get_result();

    if($resultado->num_rows >0){
        $usuario = $resultado->fetch_assoc();
        if(password_verify($password, 'password')){
            $_SESSION['usuario_id'] = $usuario['id'];
            header("Location: inicio.php");
            exit();
        } else{
            echo "Clave incorrecta.";
        }
        
    } else{
        echo "Usuario no existe.";
    }

}


?>