<?php


$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$cel = $_POST['cel'];
$correo = $_POST['correo'];
$escolaridad = $_POST['escolaridad'];
$curso_interes = $_POST['curso_interes'];
$pago = $_POST['pago'];
$codigo = $_POST['codigo'];


$para = 'alma.nicolas@bitnueve.mx';   
$titulo = 'REGISTRO A CURSO DE REDES';
$header = 'From: '. $correo;
$msjCorreo = "Nombre: $nombre\n Apellido_Paterno: $paterno\n Apellido_Materno: $materno\n Telefono: $cel\n Correo: $correo\n Escolaridad: $escolaridad\n curso_interes: $curso_interes\n Forma_Pago: $pago\n  Codigo: $codigo\n ";


$bool= mail($para, $titulo, $msjCorreo, $header);
if($bool){
 
echo"<script type=\"text/javascript\">alert('Registro realizado con exito, en breve te contactaremos'); window.location='http://www.bitnueve.mx';</script>";  

}else{
    echo "!ohhh, hubo un problema en tu envio";
   }
?>