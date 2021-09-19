<?php 
session_start();
if(!isset($_SESSION["user"])){
    header('Location: ./ingreso.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home/fontello.css">
    <link rel="stylesheet" href="./css/home/home.css">
    <link rel="stylesheet" href="./css/home/menu.css">
    <link rel="stylesheet" href="./css/home/slider.css">
    <title>RaidMg</title>
</head>
<body>
   <header>
   <?php
    include ("./pag/menu.php");
    ?>
 

        <section id="">
            
            <h2>Bienvenido <?php echo $_SESSION["user"] ?></h2>
            <h3></h3>
            <h3></h3>
        </section>
               
                
            </div>
        </div>
        </main>













    <footer>
    <?php
    include ("./pag/footer.php");
    ?>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
<script src="./js/slider.js"></script>  
<script src="./js/menu.js"></script>  
</body>
</html>