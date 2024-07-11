<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

//Evitar mensajes con links spam
function contieneEnlaces($texto)
{
    // Expresión regular para detectar enlaces HTTP/HTTPS y aquellos que comiencen con 'http'
    $patron = '/\bhttps?:\/\/\S+|\bhttp\S+/i';
    return preg_match($patron, $texto);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $privacidad = isset($_POST['privacidad3']);

    if (!$privacidad) {
        echo "Debe aceptar la cláusula de privacidad.";
        exit;
    }

    // Validar si el mensaje contiene enlaces
    if (contieneEnlaces($mensaje)) {
        echo "No se permiten enlaces en el mensaje.";
        exit;
    }

    // Formato HTML para el cuerpo del correo
    $subject = 'CGR Web: Nuevo mensaje de contacto';
    $body = "
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Nuevo mensaje de contacto</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>$nombre</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>$telefono</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Mensaje</td>
                <td>$mensaje</td>
            </tr>
        </table>
    </body>
    </html>";

    // Configurar PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'accede a el cpanel de tu hosting y busca en la configuración de email el dato';
        $mail->SMTPAuth = true;
        $mail->Username = ''; // Cambia esto por tu nombre de usuario
        $mail->Password = ''; // Cambia esto por tu contraseña
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Remitente y destinatario
        $mail->setFrom('email@tudominio.com', 'nombre');
        $mail->addAddress('email@tudominio.com', 'nombre');
        // Contenido del correo
        $mail->isHTML(true);
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Método de solicitud no válido.';
}
