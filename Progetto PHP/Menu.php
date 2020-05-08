<?php
session_start();

//Gestione Login
/*if(isset($_POST["logout"])){
	$_SESSION["loggato"] = false;
}

if(isset($_SESSION["loggato"]) && ($_SESSION["loggato"] == true)){
	//:(
}else{
	header("location: Login.php");
}*/



?>

<!doctype html>
<html>
	<head>
		<title>Sasso carta forbice</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="menu.css">
		
	</head>
	<body>
		<div class="dropdown show">
		  <a class="options" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none; float:right;">
			<img src="img/ingranaggio.png" style="width:30px; height: 30px;">
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-family:dark_poestry; font-size:12px;">
			<a class="dropdown-item" href="#">Login</a>
			<a class="dropdown-item" href="#">Registrati</a>
		  </div>
		</div>

	<div id="parent">
		<div class="centro" style="text-align:center;">
			<span class="maintext">SASSO CARTA FORBICE</span>
			<span class="buttons">
				<a href="Game.php" class="playbutton" style="text-decoration:none;">GIOCA</a><br>
				<a href="Rank.php" class="rankbutton" style="text-decoration:none;">CLASSIFICA</a><br>
				<a href="Rules.php" class="infobutton" style="text-decoration:none;">REGOLE</a><br><br>
			</span>
		</div>
	</div>
	
	
	
	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>