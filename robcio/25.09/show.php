<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="container">
<header>PORTAL FANÓW WYŚCIGÓW MOTORYZACYJNYCH</header>
<nav>
<ol>
<li><a href="index.html">Strona główna</a></li>
<li><a href="#">F1</a>
<ul>
<li><a href="#">Fernando Alonso</a></li>
<li><a href="#">Ciamek Czechył</a></li>
<li><a href="#">Gloszek Kacpeł</a></li>
<li><a href="#">Szymcio Kuliś</a></li>
<li><a href="#">Kasieł</a></li>
</ul>
</li>
<li><a href="#">WRC</a></li>
<li><a href="#">MotoGP</a>
<ul>
<li><a href="#">VR46</a></li>
<li><a href="#">MM93</a></li>
<li><a href="#">Sic58</a></li>
<li><a href="#">KA17</a></li>
<li><a href="#">CC35</a></li>
</ul>
</li>
<li><a href="logowanie.php">Zaloguj się</a></li>
</ol>
</nav>
<div id="content">
<?php

$password="haslo";
$user="user";

if(isset($_POST["login"])) $login=$_POST["login"];
else $login="anonymus";

if(isset($_POST["password"])) $haslo=$_POST["password"];
else $haslo="wrong";

for ($i=0;$i<count($_POST["opcje"]);$i++)
{ 
$opcje=$_POST["opcje"][$i];
}


if($password==$haslo && $user==$login)
{
	echo "NIE ZGINIESZ  ".$login."<br/>";
	
	for ($i=0;$i<count($_POST["opcje"]);$i++)
{ 
echo $_POST["opcje"][$i]." , ";
}

}
else
{
echo <<<END
<form action="logowanie.php">
Błędne dane Logowania Wróć do strony<br/>
<input type="submit" value="Wróć do strony Logowania" />
</form>	
END;
}
?>
</div>
<footer>&copy;&nbsp;Moto<span id="red">Race</span>&nbsp;2017</footer>
</div>

</body>
</html>