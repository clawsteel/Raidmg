<?php
require("conexion.php");
$co = $_REQUEST["cod"];
$ni = $_REQUEST["nick"];
$no = $_REQUEST["nom"];
$ce = $_REQUEST["cel"];
$te = $_REQUEST["team"];
$po = $_REQUEST["co"];
$ro="user";

$query = "INSERT INTO Usuario(cod, nick, nom, cel, team, rol,com) 
VALUES('" . $co . "', '" . $ni . "', '" . $no . "', '" . $ce . "', '" . $te . "', '" . $ro . "', '" . $po . "')";
$resultado = mysqli_query($conexion, $query);
header('Location: ../dament.php');
?>