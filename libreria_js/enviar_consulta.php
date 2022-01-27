<?php 
$nombre_form= $_POST['nombre'];
$apellido_form= $_POST['apellido'];
$mail_form= $_POST['email'];
$ciudad_form= $_POST['ciudad'];
$consulta_form= $_POST['consulta'];

$cuerpo_mail= "Nombre:" .$nombre_form."\r\n"."Apellido: "
.$apellido_form."\r\n". "email: " .$mail_form. "\r\n". "Ciudad:" .$ciudad_form. "\r\n".  "Consulta: " .$consulta_form;

// PARA ENVIAR MAIL
mail('alexanderjnf@gmail.com', 'Mensaje enviado de misitioweb.com', $cuerpo_mail);

// PARA CONECTAR A BASE DE DATOS
$conexion = mysqli_connect("localhost", "root", "", "casa_alexander")
or exit ("no se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT , '$nombre_form', '$apellido_form', '$mail_form', '$ciudad_form', '$consulta_form')");

mysqli_close($conexion);





header("Location: contacto.php?e=ok")
?>