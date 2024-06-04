<?php

if (!empty($_POST["btnRegistrarcli"])) {
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if (!empty($nombre) and !empty($apellido) and !empty($email) and !empty($telefono)) {
        $sql = $conexion->query("INSERT INTO clientes(nombre,apellido,email,telefono) VALUES ('$nombre','$apellido','$email','$telefono')");

        if ($sql === true) {
            echo '<div class="alert alert-success">Gracias por tu registro, ahora eres parte de la comunidad ElectroTech</div>';
        } else {
            echo '<div class="alert alert-danger">UPS! No se ha podido realizar el registro, intenta más tarde</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos no ha sido diligenciado</div>';
    }
}