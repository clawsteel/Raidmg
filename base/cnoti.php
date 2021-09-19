<?php
require("conexion.php");

$titulo=$_POST["titulo"];
$noti=$_POST["noticia"];
$fechi=$_POST["fechi"];
$fechf=$_POST["fechf"];

if($_FILES["arch"]){
    $nombre_final=$titulo."-".date("m-d-y").".png";
    $ruta="./img/sl/".$nombre_final;
    $ruta2="../img/sl/".$nombre_final;
    $subirarchivo= move_uploaded_file($_FILES["arch"]["tmp_name"],$ruta2);
    if($subirarchivo){
        $query="INSERT INTO Noti(titulo,notis,ri,fi,ff) VALUES ('$titulo','$noti','$ruta','$fechi','$fechf')";
        $resultado = mysqli_query($conexion, $query);
        header('Location: ../adnoticia.php');
    }
}
















?>