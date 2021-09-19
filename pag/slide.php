


   <?php
     require("conexion.php");
     $fech=date("d-m-y");
     $lalo=0;
     $query = "SELECT * FROM noti WHERE ff>'$fech'"; 
     $resultado = mysqli_query($conexion, $query);
        while($fila = mysqli_fetch_assoc($resultado)) {
          $lalo++;
         echo '<div class=""><img src="'.$fila["ri"].'" alt="" srcset="" class="sliimg"></div>';





        }
    




    ?>









