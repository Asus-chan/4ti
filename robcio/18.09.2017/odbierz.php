<!DOCTYPE HTML>
 <html lang="pl">
 <head>
	<meta chatset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="form.css"/>
 </head>
 <body>
 <?php
 if(isset($_POST["login"])) $login = $_POST["login"];
 else $login = "anonim";
 echo "Twój login: ".$login."<br />";
 if(isset)($_REQUEST["haslo"])) $haslo = $_REQUEST["haslo"];
 else $haslo = "haslo";
 echo "Twoje hasło: ".$haslo."<br />";
 $haslo_sz = md5($haslo);
 echo "Hasło zaszyfrowane: ".haslo_sz."<br />";
 
 ?>
 <form action="form.php">
 <input type="submit" value="Wróć do formularza" />
 </form>
 </body>
 </html>