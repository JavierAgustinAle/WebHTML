 <<?php 
$destino= "practicaenviomail@gmail.com";
$nombre = $_POST["Nombre"];
$email = $_POST["Email"];
$telefono = $_POST["Telefono"];
$mensaje = $_POST["Mensaje"];

$Contenido = "Nombre: " . $nombre . "\n Correo: " . $email . 
    "\n Telefono: " . $telefono . "\n Mensaje: ". $mensaje ;

mail($destino,"Consulta",$Contenido);

header("Gracias.html")


  ?>



    
    
