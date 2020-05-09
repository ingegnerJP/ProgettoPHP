<?php
	session_start();
	
		//print_r($_SESSION);
	
		function endSessionGame() {
			$_SESSION = array();
			session_destroy();
			header("location: Modalita.php");
		}
		
		if(isset($_GET["game"])){
			endSessionGame();
		}
		
		function endSessionMenu() {
			$_SESSION = array();
			session_destroy();
			header("location: Menu.php");
		}
		
		if(isset($_GET["menu"])){
			endSessionMenu();
		}

?>
<!doctype html>
<html>
	<head>
		<title>
			<?php if($_SESSION["player"] > $_SESSION["computer"]){
					echo "HAI VINTO";
				  }else{
					echo"HAI PERSO";
				  }
			?>
		</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="winloss.css">	
	</head>
	<body>
		<div class="centro">
			<div class="text">
			<?php if($_SESSION["player"] > $_SESSION["computer"]){
					?><style>body{background-color:#ffcc99;}</style><?php
					echo "HAI VINTO";?>
					<p>
						<a href="WinLoss.php?game=true" class="retrybuttonWin" style="text-decoration:none" onclick="endSessionGame()">Riprova</a>
						<a href="WinLoss.php?menu=true" class="menubutton" style="text-decoration:none" onclick="endSessionMenu()">Torna al menu</a>
					</p>
					<?php
				  }else{
				  ?><style>body{background-color:#F4F0EC;}</style><?php
					echo"HAI PERSO";?><br>
					<?php echo"<p style='font-size:14px; margin-top:10px; margin-bottom:-5px;'>(la prossima volta andra' meglio)</p>"?>
					<p>
						<a href="WinLoss.php?game=true" class="retrybuttonLoss" style="text-decoration:none" onclick="endSessionGame()">Riprova</a>
						<a href="WinLoss.php?menu=true" class="menubutton" style="text-decoration:none" onclick="endSessionMenu()">Torna al menu</a>
					</p>
				  <?php
				  }
			?>

			</div>
		</div>

	
	
	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>