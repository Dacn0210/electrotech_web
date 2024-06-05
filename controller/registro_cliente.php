<?php

if (!empty($_POST["btnRegistrarcli"])) {
    $nit = $_POST['nit_cliente'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if (!empty($nit) and !empty($nombre) and !empty($apellido) and !empty($email) and !empty($telefono)) {
        $sql = $conexion->query("INSERT INTO clientes (id, nombre, apellido, email, telefono, id_rol) VALUES ('$nit','$nombre', '$apellido', '$email', '$telefono', 3)");

        if ($sql === true) {
            echo '<div class="alert alert-success">Gracias por tu registro, ahora eres parte de la comunidad ElectroTech</div>';
        } else {
            echo '<div class="alert alert-danger">UPS! No se ha podido realizar el registro, intenta más tarde</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos no ha sido diligenciado</div>';
    }
}