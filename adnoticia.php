



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cargar noticia</title>
    <link rel="stylesheet" href="./css/log/login.css">

</head>
<body>

<form action="./base/cnoti.php" class="form-register" method="post" enctype="multipart/form-data">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="">
    <label for="noticia">Noticia</label>
    <input type="text" name="noticia" id="">
    <label for="fechi">Fecha de inicio DD-MM-YY</label>
    <input type="text" name="fechi" id="">
    <label for="fechf">Fecha de finalizado DD-MM-YY</label>
    <input type="text" name="fechf" id="">
    <label for="arch">La imagen</label>
    <input type="file" name="arch" id="">

    <input type="submit" value="Cargar" class="btnsub">
</form>






<footer>
<?php require("./pag/footer.php"); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>