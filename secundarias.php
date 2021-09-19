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
    <title>Miembros</title>
    <link rel=”shortcut icon” type=”image/ico” href=”./img/favicon.ico”/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/home/fontello.css">
    <link rel="stylesheet" href="./css/home/home.css">
    <link rel="stylesheet" href="./css/home/menu.css">
    <link rel="stylesheet" href="./css/home/general.css">
    <link rel="stylesheet" href="./css/miembros.css">
  
	<script src="./js/vali.js"></script>
	<script src="./js/valr.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<header>
<?php
    include ("./pag/menu.php");
    ?>

<form action="./base/cargasec.php" class="pepe" id="pepe" method="" onsubmit="return valr();">
			<H2>Registrar secundarias</H2>
				
					

					<label for="nick">Nombre cuenta secundaria</label>
					<input type="text" name="nick" id="nick" >
<br>
					<label for="con">Codigo de amistad</label>
					<input type="text" name="cod" id="cod" >
<br>
				<label for="team">Equipo</label>
				<select class="custom-select" name="team" id="team" >
					<option value="1">Sabiduria</option>
					<option value="2">Valor</option>
					<option value="3">Instinto</option>
				</select>
				<input type="submit" value="Aceptar" name="sumitr">
				</form>





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
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
<script src="./js/copy.js"></script>
<script src="./js/menu.js"></script>

</body>
</html>