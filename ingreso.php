<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/log/login.css">
	<script src="./js/vali.js"></script>
	<script src="./js/valr.js"></script>
</head>
<body>

	<header>
	<div class="lb">
	<img src="./img/logo.png" alt="">
	</div>
	  
	
	</header>
	
<!-- ingresar -->
		

<form class="pepe" action="./base/ingre.php" class="" method="" onsubmit="return vali();">
<h2>Ingresar</h1>
			
					<label for="nomi">Usuario</label>
					<input type="text" name="nomi" id="nomi" >

					<label for="passi">Contraseña</label>
					<input type="password" name="passi" id="passi" >

				<input type="submit" value="Aceptar" name="sumiti">
				</form>
			
<!-- registrase hide-->
		
		
			<form class="pepe" action="./base/carga.php" class="" method="" onsubmit="return valr();">
			<H2>Registrarse</H2>
				
					<label for="nom">Usuario</label>
					<input type="text" name="nom" id="nom" >

					<label for="pass">Contraseña</label>
					<input type="password" name="pass" id="pass" >

					<label for="passr">Repetir Contraseña</label>
					<input type="password" name="passr" id="passr" >
			
				
				
					<label for="nick">Nombre en el Juego</label>
					<input type="text" name="nick" id="nick" >

					<label for="con">Codigo de amistad</label>
					<input type="text" name="cod" id="cod" >

					<label for="cel">Numero de Celular</label>
					<input type="text" name="cel" id="cel" >

					<label for="nick">Fecha de Nacimiento</label>
					<input type="date" name="fe" id="fe" >
			
				

				<label for="team">Equipo</label>
				<select class="custom-select" name="team" id="team" >
					<option value="1">Sabiduria</option>
					<option value="2">Valor</option>
					<option value="3">Instinto</option>
				</select>
				<input type="submit" value="Aceptar" name="sumitr">
				</form>
	
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>