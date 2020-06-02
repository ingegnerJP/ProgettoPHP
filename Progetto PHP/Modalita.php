<?php
session_start();

//print_r($_SESSION);


if(isset($_POST["meglio"])){ //esiste? 
	header("location: Game.php");
}else{ // no non esiste!!!
	
}

?>

<!doctype html>
<html>
	<head>
		<title>Sasso Carta forbice</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="modalita.css">
		
	</head>
	<body>
		
		<a class="back" href="Menu.php"  style="text-decoration:none; float:right;">
			<img src="img/freccia.png" style="width:30px; height: 30px;">
		</a>
	
	
		<div class="centro" style="text-align:center;">
			<span class="maintext">SCEGLI UNA MODALITA'</span>
			<form action="Game.php" method="POST" id="form">
				<span class="buttons"> 
					<button type="submit" class="meglio3" style="text-decoration:none; outline:none;" name="meglio" value="meglio3" >ALLA MEGLIO DI 3</button><br>
					<button type="submit" class="meglio5" style="text-decoration:none; outline:none;"  name="meglio" value="meglio5" >ALLA MEGLIO DI 5</button><br>
					<button type="submit" class="meglio7" style="text-decoration:none; outline:none;" name="meglio" value="meglio7" >ALLA MEGLIO DI 7</button><br>
				</span>
			</form>
		</div>
	
	
	
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>