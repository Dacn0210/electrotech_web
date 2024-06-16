<?php
require '../model/conexion.php';
require '../PHPmailer/Exception.php';
require '../PHPmailer/PHPMailer.php';
require '../PHPmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_email"])) {
    $email = $_POST["email"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico proporcionado no es válido.";
        exit();
    }

    $codigo = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

    $sql = "UPDATE usuarios SET codigo_recuperacion = ? WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $codigo, $email);

    if ($stmt->execute()) {

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
            $mail->addAddress($email);

            $mail->Subject = utf8_decode('Recuperación de contraseña');
            $mail->isHTML(true);
            $mail->Body = '<!DOCTYPE html>
                            <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <style>
                                        body {
                                            line-height: 1.6;
                                            margin: 0;
                                            padding: 0;
                                            background-color: #fAfAfA;
                                        }
                                        #cajita1 {
                                            max-width: 600px;
                                            margin: 20px auto;
                                            padding: 20px;
                                            background: #FAFAFA;
                                            border-radius: 5px;
                                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                        }
                                        img {
                                            display: block;
                                            margin: 0 auto;
                                            width: 30%;
                                        }
                                        h1 {
                                            text-align: center;
                                            font-size: xxx-large;
                                            color: #014972;
                                        }
                                    </style>
                                </head>
                                <body>
                                    <div id="cajita1">
                                        <img src="https://i.ibb.co/42pW0xD/Logo.png" alt="Logo de la empresa">
                                        <h3>Hola, '. $nombre .',</h3>
                                        <p>Tu codigo de para restablecer tu contraseña es:</p>
                                        <div class="container">
                                            <h1>' . $codigo . '</h1>
                                        </div>
                                        <p>Ingresa al siguiente enlace: <a></a>https://electrotech.cloud/view/nuevacontrase%C3%B1a.php para seguir con el proceso de recuperacion de contraseña</p>
                                    </div>
                                    
                                </body>
                            </html>';
            $mail->send();
            header("Location: mensaje_enviado.php");
            exit();
        } catch (Exception $e) {
            echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error al generar el código de recuperación: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
