<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial>
<title> Contacto </title>
<link rel="stylesheet" href="Estilos.css">

    </head>
    <body>
    <?php include ('header.php')?>

<section class="contacto">
<h1> Contactanos </h1>
</section>
<form action="enviar_consulta.php" method="POST">
    <input type="text" name=" nombre" placeholder="Nombre" class="contacto_input" required>
    <input type="text" name=" apellido" placeholder="Apellido" class="contacto_input" required>
    <input type="text" name=" email" placeholder="Email" class="contacto_input" required>
    <input type="text" name=" ciudad" placeholder="Ciudad" class="contacto_input" required>
    <input type="text" name=" consulta" placeholder="Consulta" class="contacto_input" required>
    <input type="submit" vallue= "Enviar" class="btnenviar" id="">
</form>

<?php 
        if (isset($_GET ['e'])){
        echo "<h3> ¡Ya recibimos tu consulta, en breve te contactaremos! </h3>";
        }
        ?>

</body>

</html>