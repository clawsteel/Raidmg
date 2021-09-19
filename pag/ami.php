<?php
 require("conexion.php");
 $lalo=0;
 $query = "SELECT * FROM Usuario"; 
 $resultado = mysqli_query($conexion, $query);
    while($fila = mysqli_fetch_assoc($resultado)) {
      $lalo++;
      $cod =str_replace(' ', '', $fila["cod"]);
      echo '<tr class="r'.$fila["team"].'"><th scope="row">'.$lalo.'</th><td>'.$fila["nick"].'</td><td><button type="button" class="cop" data-clipboard-text="'.$cod.'">Copiar codigo</button></td></tr>';
    }
  




?>
