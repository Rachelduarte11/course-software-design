<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    #PASO-1 : Declaración de variables
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $email= $_POST['email'];
    $telefono= $_POST['telefono'];
   # $terminos= $_POST['terminos'];

    #PASO-2 : Indicamos el destinatario
    $destinatario= 'rachel11072003@gmail.com';

    #PASO-3 : Indicamos con que asunto llegará el mensaje
    $asunto= 'Primera prueba en PHP ✔';

    #PASO-4 : Diseñamos el mensaje
     
    $cuerpo= 'Nombres: ' . $nombres .'\n';
    $cuerpo .='Apellidos: ' . $apellidos .'\n';
    $cuerpo .='Email: ' . $email .'\n';
    $cuerpo .='Telefono: ' . $telefono .'\n';

    #PASO-5 : Programamos el envio al servidor de correo

    mail($destinatario, $asunto, $cuerpo);

    
}

?>