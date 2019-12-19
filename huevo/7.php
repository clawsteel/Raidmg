<?php
 require("./pag/conexion.php");
 $lalo=0;
 $query = "SELECT * FROM Huevo WHERE est = 'si' and grupo='07' "; 
 $resultado = mysqli_query($conexion, $query);
    while($fila = mysqli_fetch_assoc($resultado)) {
      $lalo++;
      echo '<tr class="'.$fila["cat"].'"><th scope="row">'.$lalo.'</th><td><img src="./img/impo/'.$fila["poke"].'.png" class="chi" alt=""></td></tr>';
    }
?>