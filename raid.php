<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raids</title>
    <link rel=”shortcut icon” type=”image/ico” href=”./img/favicon.ico”/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style/raid.css">
<link rel="stylesheet" href="./style/misiones.css">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include ("./pag/menu.php");
?>
<div class="container">
<div class="row">
<div class="col-10 offset-1 tx">


<H4>Nivel 1</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/01.php");
?>
   </tbody>
</table>

<H4>Nivel 2</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/02.php");
?>
   </tbody>
</table>

<H4>Nivel 3</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/03.php");
?>
   </tbody>
</table>
<H4>Nivel 4</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/04.php");
?>
   </tbody>
</table>

<H4>Nivel 5</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/05.php");
?>
   </tbody>
</table>


<H4>Nivel ex</H4>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pokemon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include ("./raid/06.php");
?>
   </tbody>
</table>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
<script src="./js/copy.js"></script>

</body>
</html>