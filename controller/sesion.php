<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: /Electrotech/view/login.php");
    exit();
}

