<?php 

session_start();


?>
<!doctype html>
<html>
	<head>
		<title>Registrati</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" media="all" type="text/css" href="register.css">	
		
	</head>
	<body> 
		
		<div class="centro form">
		<form action="Register.php" method="POST">
		
		
		  <div class="form-group">
			<label for="email" class="email">Indirizzo email</label>
			<div class="col-sm-10"> 
				<input type="email" class="form-control" name="email" style="width:250px; font-family:dark_poestry; font-size:10px; margin-bottom:-8px;">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="nome" class=" col-form-label username">Username</label>
			<div class="col-sm-10">  
			  <input type="text" class="form-control" name="username" placeholder="" value="" style="width:250px; font-family:dark_poestry; font-size:10px;">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="cognome" class=" col-form-label password">Password</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password" placeholder="" value="" style="width:250px; font-family:dark_poestry; font-size:10px;">
			</div>
		  </div>
		  
		  <div class="form-group">
			  <button type="submit" class="loginbutton"  name="login">Registrati</button>
		  </div>
		  <div class="form-group text">
			   Hai gia' un'account? Clicca <a href="Login.php" class="register">qui</a>
		  </div>
		</form>
		</div>	
		
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
