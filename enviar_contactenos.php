<?php
    $destino = 'Gerencia@pharmek';
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Correo = $_POST['Correo electronico'];
    $Telefono = $_POST['Telefono'];
    $Ocupacion = $_POST['Ocupacion'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];

    $contenido = "Nombre: " . $Nombre . "\nApellido: " . $Apellido . "\nEdad: " . $Edad . "\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nOcupacion: " . $Ocupacion ."\nAsunto: " . $Asunto . "\nMensaje: " . $Mensaje;
  
    mail($destino,"contacto" , $contenido);
    header("Location:contactenos.html");

?>
