<?php
require("conexion.php");
$co = $_REQUEST["poke"];
$ni = $_REQUEST["nivel"];
$te =$_REQUEST["cat"];
$ro="si";


$query = "INSERT INTO Raid(poke, nivel, est, cat) 
VALUES('" . $co . "', '" . $ni . "', '" . $ro . "', '" . $te . "')";
$resultado = mysqli_query($conexion, $query);
header('Location: ../cargarraid.php');
?>