<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$base_path = dirname(__FILE__);

require $base_path . '/../PHPMailer/Exception.php';
require $base_path . '/../PHPMailer/PHPMailer.php';
require $base_path . '/../PHPMailer/SMTP.php';

// Incluir el archivo de conexión
require $base_path . '/model/conexion.php';

if (!empty($_POST["btnRegistrarcli"])) {
    $nit = $_POST['nit_cliente'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if (!empty($nit) && !empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono)) {
        $sql = $conexion->query("INSERT INTO clientes (id, nombre, apellido, email, telefono, id_rol) VALUES ('$nit','$nombre', '$apellido', '$email', '$telefono', 3)");

        if ($sql === true) {
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'soporte.electrotechdh@gmail.com';
                $mail->Password = 'kjdt evxm ovpo pgnu';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Habilitar depuración
                $mail->SMTPDebug = 2; // Nivel de depuración
                $mail->Debugoutput = 'html'; // Salida de depuración en formato HTML

                $mail->setFrom('soporte.electrotechdh@gmail.com', 'Electrotech');
                $mail->addAddress($email, $nombre);

                $mail->Subject = 'Gracias por registrarte!';
                $mail->isHTML(true);
                $mail->Body = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <style>
                        /* Estilos */
                    </style>
                </head>
                <body>
                    <div class="container">
                        <img src="https://i.ibb.co/42pW0xD/Logo.png" alt="Logo de la empresa" id="logo">
                        <h1>Hola ' . $nombre . ',<br></h1>
                        <p>En nombre de todo el equipo de ElectroTech, queremos darte una calurosa bienvenida. Estamos muy contentos de
                            que hayas decidido formar parte de nuestra comunidad.</p>
                        <br>
                        <img src="https://i.ibb.co/2PVfMrf/Img-correo.png" alt="Img-correo" border="0" id="promo">
                        <div class="derechos">
                            Este mensaje y sus archivos adjuntos son confidenciales y están
                            dirigidos únicamente al destinatario especificado. Si usted ha
                            recibido este mensaje por error, por favor notifique al remitente y
                            elimine este mensaje de inmediato. Cualquier divulgación,
                            distribución o reproducción de este mensaje por parte de cualquier
                            persona que NO sea el destinatario designado está estrictamente
                            prohibida.
                            <p class="copy">Copyright ©2024 ElectroTech. Todos los derechos
                                reservados
                            </p>
                        </div>
                    </div>
                </body>
                </html>';

                // Enviar el correo electrónico
                $mail->send();

                echo '<div class="alert alert-success">Te has registrado exitosamente</div>';
            } catch (Exception $e) {
                echo '<div class="alert alert-danger">UPS! No se ha podido realizar el registro, intenta más tarde.</div>';
            }
        } else {
            echo '<div class="alert alert-danger">UPS! No se ha podido realizar el registro, intenta más tarde.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos no ha sido diligenciado</div>';
    }
}
?>
