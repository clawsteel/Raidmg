<?php
require("conexion.php");
$co = $_REQUEST["cat"];
$ni = $_REQUEST["mis"];
$no = $_REQUEST["rec"];
$ti = $_REQUEST["tipo"];
$ro="si";


$query = "INSERT INTO Misiones(cat, descr,reco, est, tipo) 
VALUES('" . $co . "', '" . $ni . "', '" . $no . "', '" . $ro . "', '" . $ti . "')";
$resultado = mysqli_query($conexion, $query);
header('Location: ../cargarmisiones.php');
?>