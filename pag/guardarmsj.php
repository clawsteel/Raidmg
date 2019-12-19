<?php
require("conexion.php");
$ni = $_REQUEST["nom"];
$no = $_REQUEST["e"];
$ce = $_REQUEST["men"];


$query = "INSERT INTO Msj(nom, mail,men ) 
VALUES('" . $ni . "', '" . $no . "', '" . $ce . "')";
$resultado = mysqli_query($conexion, $query);
header('Location: ../index.php');
?>