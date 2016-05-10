<?php


$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$cel = $_POST['cel'];
$correo = $_POST['correo'];
$escolaridad = $_POST['escolaridad'];
$formato = $_POST['formato'];
$especialidad = $_POST['especialidad'];
$opciont = $_POST['opciont'];
$pago = $_POST['pago'];


$para = 'alma.nicolas@bitnueve.mx';   
$titulo = 'REGISTRO A DIPLOMADO';
$header = 'From: '. $correo;
$msjCorreo = "Nombre: $nombre\n Apellido_Paterno: $paterno\n Apellido_Materno: $materno\n Telefono: $cel\n Correo: $correo\n Escolaridad: $escolaridad\n Formato: $formato\n Especialidad: $especialidad\n Opcion_Titulacion: $opciont\n Forma_Pago: $pago\n ";


$bool= mail($para, $titulo, $msjCorreo, $header);
if($bool){
 
echo"<script type=\"text/javascript\">alert('Registro realizado con exito, en breve te contactaremos'); window.location='http://www.bitnueve.mx';</script>";  

}else{
    echo "!ohhh, hubo un problema en tu envio";
   }
?>