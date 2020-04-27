<?php session_start();?>
<!doctype html>
<html>
	<head>
		<title>Sasso carta forbice</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="game.css"> 
	</head>
	<body style="background-color:#ffcc99;">
		<form action="Game.php" method="POST">
		<p class="up-text">SCEGLI UNA CARTA...</p>
		<div class="container">
			<input type="button" class="rock" name="rock" id="rock" onmouseover="text(this)"  onmouseleave="vuoto(this)">
			<input type="button" class="paper" name="paper" id="paper" onmouseover="text(this)"  onmouseleave="vuoto(this)">
			<input type="button" class="scissors" name="scissors" id="scissors" onmouseover="text(this)"  onmouseleave="vuoto(this)">
		</div>
		</form>
		<div class="bottom-div"><p id="paragraph"><script type="text/javascript" src="game.js"></script></p></div>
	
	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>