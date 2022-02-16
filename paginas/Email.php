<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "leandrorope@gmail.com";
    $to = "leandrorocha@outlook.com.br";
    $subject = "Checking PHP mail";
    $message = "Teste de envio de e-mail";



    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Seu email foi enviado.";

?>