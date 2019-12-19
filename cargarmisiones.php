<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>misiones</title>
    <link rel=”shortcut icon” type=”image/ico” href=”./img/favicon.ico”/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style/raid2.css">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include ("./pag/menu.php");
    ?>
<h3 class="tit2 text-center">misiones</h3>
<div class="contain">
    <div class="row">
        
       
       
            <form action="./pag/cargamis.php"class="col-6 offset-3 text-center tx">

                <label for="cat">Categoria</label>
                <select class="custom-select" name="cat">
                    <option value="comun">comun</option>
                    <option value="shiny">shiny</option>
                   
                </select>

                <label for="mis">Mision</label>
                <input type="text" name="mis" id="mis">

                <label for="rec">Tipo</label>
                <input type="text" name="tipo" id="tipo">

                <label for="rec">Recompensa</label>
                <input type="text" name="rec" id="rec">

                <input type="submit" value="Aceptar">
            </form>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>