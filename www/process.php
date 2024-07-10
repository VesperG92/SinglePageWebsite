<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $privacidad = isset($_POST['privacidad']) || isset($_POST['privacidad2']);

    if (!$privacidad) {
        echo "Debe aceptar la cláusula de privacidad.";
        exit;
    }

    $subject = '';
    $body = '';
    if (isset($_POST['direccion'])) {
        // Formulario de Comunidades de Propietarios
        $direccion = $_POST['direccion'];
        $viviendas = $_POST['viviendas'];
        $locales = $_POST['locales'];
        $garajes = $_POST['garajes'];
        $trasteros = $_POST['trasteros'];
        $duracion = $_POST['duracion'];
        $observacion = $_POST['observacion'];
        $ascensor = isset($_POST['ascensor']) ? 'Sí' : 'No';
        $portero = isset($_POST['portero']) ? 'Sí' : 'No';
        $limpieza = isset($_POST['limpieza']) ? 'Sí' : 'No';
        $calefaccion = isset($_POST['calefacion']) ? 'Sí' : 'No';
        $aerotermia = isset($_POST['aerotermia']) ? 'Sí' : 'No';

        $subject = 'CGR Web: Formulario de Comunidades de Propietarios';
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
                img {
                    max-width: 200px;
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <h2>Formulario de Comunidades de Propietarios</h2>
            <table>
                <tr><th>Campo</th><th>Valor</th></tr>
                <tr><td>Nombre</td><td>$nombre</td></tr>
                <tr><td>Teléfono</td><td>$telefono</td></tr>
                <tr><td>Email</td><td>$email</td></tr>
                <tr><td>Dirección de Comunidad</td><td>$direccion</td></tr>
                <tr><td>Número de Viviendas</td><td>$viviendas</td></tr>
                <tr><td>Número de Locales</td><td>$locales</td></tr>
                <tr><td>Número de Garajes</td><td>$garajes</td></tr>
                <tr><td>Número de Trasteros</td><td>$trasteros</td></tr>
                <tr><td>Duración Actual Cargo de Presidencia</td><td>$duracion</td></tr>
                <tr><td>Ascensor</td><td>$ascensor</td></tr>
                <tr><td>Servicio de Portería/Conserjería</td><td>$portero</td></tr>
                <tr><td>Servicio de Limpieza</td><td>$limpieza</td></tr>
                <tr><td>Calefacción Central</td><td>$calefaccion</td></tr>
                <tr><td>Aerotermia</td><td>$aerotermia</td></tr>
                <tr><td>Observaciones</td><td>$observacion</td></tr>
            </table>
        </body>
        </html>";
    } elseif (isset($_POST['servicio'])) {
        // Formulario de Asesoramiento Jurídico
        $servicio = $_POST['servicio'];
        $consulta = $_POST['consulta'];

        $subject = 'CGR Web: Formulario de Asesoramiento Jurídico';
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
                    border-bottom: 1px solid #ddd.
                }
                th {
                    background-color: #f2f2f2.
                }
                img {
                    max-width: 200px;
                    margin-bottom: 20px.
                }
            </style>
        </head>
        <body>
            <h2>Formulario de Asesoramiento Jurídico</h2>
            <table>
                <tr><th>Campo</th><th>Valor</th></tr>
                <tr><td>Nombre</td><td>$nombre</td></tr>
                <tr><td>Teléfono</td><td>$telefono</td></tr>
                <tr><td>Email</td><td>$email</td></tr>
                <tr><td>Tipo de Servicio</td><td>$servicio</td></tr>
                <tr><td>Consulta</td><td>$consulta</td></tr>
            </table>
        </body>
        </html>";
    }


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
        $mail->addAddress('email@tudominio.com', 'Sandra');

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
