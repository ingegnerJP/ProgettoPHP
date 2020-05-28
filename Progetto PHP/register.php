<?php
session_start();
require_once "SleekDB.php";
$dataDir = "mydb";
$newsStore = \SleekDB\SleekDB::store('news', $dataDir);

if (isset($_POST["t"])) {
  $newsInsertable = [
      "u" =>htmlspecialchars($_POST["user"]) ,
      "p" => htmlspecialchars($_POST["pass"]),
  ];

  $results = $newsStore->insert( $newsInsertable );
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
pagina protetta per la modifica dei dati
<form class="" action="" method="post">
  titolo:<input type="text" name="user" value=""><br>
  descrizione:<input type="text" name="pass" value=""><br>
  <input type="submit" name="" value="salva">


      <?php
      $news = $newsStore->fetch();
       foreach ($news as $key => $value) {
         echo " ".$value["u"]."".$value["p"]." ";
       }
       ?>

</form>

  </body>
</html>
