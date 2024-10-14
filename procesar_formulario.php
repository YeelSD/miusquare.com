<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["name"];
    $telefono = $_POST["phone"];
    $email = $_POST["email"];
    $empresa = $_POST["empresa"];
    $giro_empresa = $_POST["giro"];
    $estado = $_POST["estado"];
    $proyecto = $_POST["message"];

    $destinatario = 'contacto@miusquare.com';
    // Recoge los datos del formulario

     // Asunto del correo
    $asunto = "Nuevo formulario de contacto";

      // Mensaje del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Empresa: $empresa\n";
    $mensaje .= "Giro de la empresa: $giro\n";
    $mensaje .= "Estado: $estado\n\n";
    $mensaje .= "Proyecto:\n$proyecto";

    // Cabeceras del correo
    $cabeceras = "From: $email";

    mail($destinatario, $asunto, $mensaje, $cabeceras);
   // Puedes redirigir al usuario a una página de agradecimiento después de enviar el formulario
   header("Location: gracias.html");
   exit();
}
   
?>