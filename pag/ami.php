<?php
 require("conexion.php");
 $lalo=0;
 $query = "SELECT * FROM Usuario WHERE rol = 'user'"; 
 $resultado = mysqli_query($conexion, $query);
    while($fila = mysqli_fetch_assoc($resultado)) {
      $lalo++;
      echo '<tr class="r'.$fila["team"].'"><th scope="row">'.$lalo.'</th><td>'.$fila["nick"].'</td><td><button '.$fila["com"].' class="cop" data-clipboard-text="'.$fila["cod"].'">Copiar codigo</button></td></tr>';
    }
  




?>
