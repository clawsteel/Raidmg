<?php
session_start();
require("conexion.php");
$co = $_REQUEST["cod"];
$ni = $_REQUEST["nick"];
$no = $_REQUEST["nom"];
$ce = $_REQUEST["cel"];
$te = $_REQUEST["team"];
$fe = $_REQUEST["fe"];
$ro="user";
$password= $_REQUEST["pass"];
$password2= $_REQUEST["passr"];
$co =str_replace(' ', '', $co);
$hash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO Usuario(cod, nick, nom, cel, team, rol,fechna,pass) 
VALUES('" . $co . "', '" . $ni . "', '" . $no . "', '" . $ce . "', '" . $te . "', '" . $ro . "', '" . $fe . "', '" . $hash . "')";
$resultado = mysqli_query($conexion, $query);
$_SESSION["user"]=$no;
//var_dump($conexion)

header('Location: ../home.php');
?>