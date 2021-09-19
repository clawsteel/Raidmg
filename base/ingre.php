<?php
session_start();
require("conexion.php");

$no2 =$_REQUEST["nomi"];
$password2= $_REQUEST["passi"];


$query = 'SELECT * FROM Usuario WHERE nom LIKE "' . $no2 . '" LIMIT 1';
    $resultado2 = mysqli_query($conexion, $query);
    $usuario2 = mysqli_fetch_array($resultado2);

    if (password_verify($password2, $usuario2["pass"])) {

        $_SESSION["user"] = $no2;
        $_SESSION["codid"]=$usuario2["cod"];
        $_SESSION["cel"]=$usuario2["cel"];
         header('Location: ../home.php');
             } 
             else {
                     echo "<p>Usuario o Contraseña incorretos</p>";
                 };
?>