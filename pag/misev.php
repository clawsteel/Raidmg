<?php
 require("conexion.php");
 $lalo=0;
 $query = "SELECT * FROM Misiones WHERE est = 'si' and tipo='evento' "; 
 $resultado = mysqli_query($conexion, $query);
    while($fila = mysqli_fetch_assoc($resultado)) {
      $lalo++;
      echo '<tr class="'.$fila["cat"].'"><th scope="row">'.$lalo.'</th><td>'.$fila["descr"].'</td><td><img src="./img/impo/'.$fila["reco"].'.png" class="chi" alt=""></td></tr>';
    }
?>
