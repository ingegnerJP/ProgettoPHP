<?php
session_start();

require_once "SleekDB.php";
$dataDir = "mydb";
$newsStore = \SleekDB\SleekDB::store('news', $dataDir);


?>

<!doctype html>
<html>
	<head>
		<title>Sasso carta forbice</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="rank.css">	
	</head>
	<body>
		<a class="back" href="Menu.php"  style="text-decoration:none; float:right;">
			<img src="img/freccia.png" style="width:30px; height: 30px;">
		</a>


		<div class="centro" style="text-align:center;">
			<span class="maintext">CLASSIFICA GLOBALE</span>
		</div>
		<div class="centro1" style="text-align:center;">
			<table style="widht:100%;">
			  <tr>
				<th style="color:#289ead; text-shadow:1px 1px 0px #1c6b75;">Utente</th>
				<th style="color:#2eb82e; text-shadow:1px 1px 0px #1f7a1f;">Vittorie</th>   
			  </tr>
			<?php
				$news = $newsStore->orderBy( 'desc', 'score' )->limit( 10 )->fetch();
				//stampa array dati
				foreach($news as $key => $value){
				  echo "<tr><td>".$value["user"]."</td><td>".$value["score"]."</td></tr>";                                                                                                           
				}
			?>
		</div>
	
	
	
	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>