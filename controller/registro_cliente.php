<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$base_path = dirname(__FILE__);

require $base_path . '/../PHPMailer/Exception.php';
require $base_path . '/../PHPMailer/PHPMailer.php';
require $base_path . '/../PHPMailer/SMTP.php';

if (!empty($_POST["btnRegistrarcli"])) {
    $nit = $_POST['nit_cliente'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if (!empty($nit) and !empty($nombre) and !empty($apellido) and !empty($email) and !empty($telefono)) {
        $sql = $conexion->prepare("INSERT INTO clientes (id, nombre, apellido, email, telefono, id_rol) VALUES (?, ?, ?, ?, ?, 3)");
        $sql->bind_param("issss", $nit, $nombre, $apellido, $email, $telefono);
        $result = $sql->execute();
        $sql->close();

        if ($result) {
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'soporte.electrotechdh@gmail.com';
                $mail->Password = 'kjdt evxm ovpo pgnu';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

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
                        /* Your styles here */
                    </style>
                </head>
                <body>
                    <!-- Your email content here -->
                </body>
                </html>';

                $mail->send();
                echo '<div class="alert alert-success">Te has registrado exitosamente. Se ha enviado un correo de bienvenida a tu dirección de correo electrónico.</div>';
            } catch (Exception $e) {
                echo '<div class="alert alert-danger">UPS! No se ha podido enviar el correo de bienvenida. Error: ' . $e->getMessage() . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger">UPS! No se ha podido realizar el registro, intenta más tarde.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos no ha sido diligenciado</div>';
    }
}

?>
