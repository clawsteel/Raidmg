<?php
session_start();
require("conexion.php");
$codm=$_SESSION["codid"];
$cel=$_SESSION["cel"];
$co = $_REQUEST["cod"];
$ni = $_REQUEST["nick"];
$te = $_REQUEST["team"];
$co =str_replace(' ', '', $co);

$query = "INSERT INTO Sec(cod, nom, team,codas,cel) 
VALUES('" . $co . "', '" . $ni . "', '" . $te . "', '" . $codm . "', '" . $cel . "')";
$resultado = mysqli_query($conexion, $query);
//var_dump($conexion);

header('Location: ../secundarias.php');
?>