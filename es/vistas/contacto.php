<?php

if ($_POST) {

    $to_Email = "general@lexsap.com.pe"; // Write your email here
    // Use PHP To Detect An Ajax Request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        // Exit script for the JSON data
        $output = json_encode(
                array(
                    'type' => 'error',
                    'text' => 'Request must come from Ajax'
        ));

        die($output);
    }

    // Checking if the $_POST vars well provided, Exit if there is one missing
    if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"])) {
        $output = '<i class="fas fa-exclamation box-circle-outline"></i> Los campos de entrada están vacíos!';
        die($output);
    }

    // PHP validation for the fields required
    if (empty($_POST["name"])) {
        $output = '<i class="fas fa-exclamation box-circle-outline"></i> Lo sentimos, pero su nombre es demasiado corto o no está especificado.';
        die($output);
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $output = '<i class="fas fa-exclamation box-circle-outline"></i> Por favor, introduce una dirección de correo electrónico válida.';
        die($output);
    }

    // To avoid the spammy bots, you can change the value of the minimum characters required. Here it's <20
    if (strlen($_POST["message"]) < 5) {
        $output = '<i class="fas fa-exclamation box-circle-outline"></i> Mensaje demasiado corto! Tómate tu tiempo y escribe algunas palabras.';
        die($output);
    }

    // Proceed with PHP email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
    $headers .= 'From: Web Lexsap' . "\r\n";
    $headers .= 'Reply-To: ' . $_POST["email"] . "\r\n";

    'X-Mailer: PHP/' . phpversion();

    // Body of the Email received in your Mailbox
    $emailcontent = 'Hola has recibido un nuevo mensaje desde la página web, del visitante: <strong>' . $_POST["name"] . '</strong><br/><br/>' . "\r\n" .
            'Su mensaje: <br/><br/> <em>' . $_POST["message"] . '</em><br/><br/>' . "\r\n" .
            '<strong>Contacta con ' . $_POST["name"] . ' via email a : ' . $_POST["email"] . '</strong>' . "\r\n";
    $Mailsending = @mail($to_Email, $_POST["subject"], $emailcontent, $headers);

    if (!$Mailsending) {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = 'Oops! Parece que algo salió mal, informar a general@lexsap.com.pe';
        die($output);
    } else {
        $output = 'Hola ' . $_POST["name"] . ', tu mensaje ha sido enviado, ¡nos pondremos en contacto contigo lo antes posible!';
        die($output);
    }
}
?>