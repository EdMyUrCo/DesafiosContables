<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo a la que se enviará el formulario (cambiar a la dirección deseada)
    $destinatario = "eddami16@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje del formulario de contacto";

    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    // Cabeceras del correo
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        // Redireccionar después de enviar el correo
        header("Location: gracias.html");
    } else {
        echo "Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.";
    }
}
?>
