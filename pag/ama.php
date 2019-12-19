<?php
 require("conexion.php");
 $lala=0;
 $query = "SELECT * FROM Usuario WHERE rol = 'admin'"; 
 $resultado = mysqli_query($conexion, $query);
    while($fila = mysqli_fetch_assoc($resultado)) {
      $lala++;
      echo '<tr class="r'.$fila["team"].'"><th scope="row">'.$lala.'</th><td>'.$fila["nick"].'</td><td><button class="cop" data-clipboard-text="'.$fila["cod"].'">Copiar codigo</button></td></tr>';
    }
  

    


?>