<?php 
session_start();


/*PER TESTARE IL PROGRAMMA*/
/*
$_SESSION["player"] = 0;
$_SESSION["computer"] = 0;
*/


if(isset($_POST["scelta"])){
	$scelta = $_POST["scelta"];//prende la scelta del giocatore
}else{
	$scelta = "";
}


/*Scelta del computer*/
$arrayAI = array("sasso", "carta", "forbici");
$random = array_rand($arrayAI, 1); //Il computer sceglie a random una delle opzioni

$sceltaAI = $arrayAI[$random];

 /*punteggio del giocatore*/
if(isset($_SESSION["player"])){
  if($scelta == "sasso" && $sceltaAI == "forbici"){
	$_SESSION["player"]++;
  }
  if($scelta == "carta" && $sceltaAI == "sasso"){
	$_SESSION["player"]++;
  }
  if($scelta == "forbici" && $sceltaAI == "carta"){
	$_SESSION["player"]++;
  }
}else{
  $_SESSION["player"] = 0;
}

 /*punteggio del computer*/
if(isset($_SESSION["computer"])){
  if($sceltaAI == "sasso" && $scelta == "forbici"){
	$_SESSION["computer"]++;
  }
  if($sceltaAI == "carta" && $scelta == "sasso"){
	$_SESSION["computer"]++;
  }
  if($sceltaAI == "forbici" && $scelta == "carta"){
	$_SESSION["computer"]++;
  }
}else{
  $_SESSION["computer"] = 0;
}

if($_SESSION["player"] == 2 || $_SESSION["computer"] == 2){
	header("location: WinLoss.php");
}


?>
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
		<div class="container centro">
			<button type="submit" class="rock" name="scelta" id="rock" value="sasso" onmouseover="text(this)"  onmouseleave="vuoto(this)">
			<button type="submit" class="paper" name="scelta" id="paper" value="carta" onmouseover="text(this)"  onmouseleave="vuoto(this)">
			<button type="submit" class="scissors" name="scelta" id="scissors" value="forbici" onmouseover="text(this)"  onmouseleave="vuoto(this)">
		</div>
		</form>
		<div class="bottom-div"><p id="paragraph"><script type="text/javascript" src="game.js"></script></p></div>
		<div class="punteggio">
			<div name="player">TU: <?php echo $_SESSION["player"]; ?> </div>
			<div name="computer">COMPUTER: <?php echo $_SESSION["computer"]; ?> </div>
		<div>
		
		<div class="sceltaAI">
			<div>
				<?php echo "Computer: ".$sceltaAI;?>
			</div>
		<div>
		
	
	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>