<?php


$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$para = 'alberto.avalos@bitnueve.mx';   
$titulo = 'SOLICITUD DE INFORMACION';
$header = 'From: '. $email;
$msjCorreo = "Nombre: $nombre\n Correo: $email\n Asunto: $asunto\n Mensaje:\n $mensaje";


$bool= mail($para, $titulo, $msjCorreo, $header);
if($bool){
 
echo"<script type=\"text/javascript\">alert('Muchas gracias por tu correo, en breve te contactaremos'); window.location='http://www.bitnueve.mx';</script>";  

}else{
    echo "!ohhh, hubo un problema en tu envio";
   }
?>