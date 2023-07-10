<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configura el destinatario y el asunto del correo
    $to = "veragonzalez.vg@gmail.com.com";
    $subject = "Contacto WEB";

    // Construye el contenido del correo
    $body = "Nombre: " . $fullname . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Mensaje: " . $message;

    // Envía el correo
    if (mail($to, $subject, $body)) {
        echo "¡Gracias por tu mensaje! Se ha enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
