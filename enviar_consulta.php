<?php 
$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$correo_form = $_POST["email"];
$telefono_form = $_POST["telefono"];
$mensaje_form = $_POST["mensaje"];


//Contraseña:3v@f3za<rU!3_9Sw

$conexion = mysqli_connect("localhost", "id19582936_chuister12", "3v@f3za<rU!3_9Sw", "id19582936_programacion_web_final") or exit ("No se
 pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (default, '$nombre_form', '$apellido_form', '$correo_form', 
'$telefono_form', '$mensaje_form')");
mysqli_close($conexion);

header("Location: contacto.php?ok");