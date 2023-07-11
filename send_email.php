<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Configura los detalles del correo
    $to = "20b3010238@untels.edu.pe"; // Cambia esta dirección de correo a la que deseas recibir los mensajes
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: " . $name . "\n";
    $message .= "Correo electrónico: " . $email . "\n";

    // Envía el correo
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        // El correo se envió correctamente
        echo "Gracias por contactarnos. Pronto nos pondremos en contacto contigo.";
    } else {
        // Error al enviar el correo
        echo "Lo sentimos, se produjo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>