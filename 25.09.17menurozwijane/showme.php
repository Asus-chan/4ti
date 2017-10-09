<!DOCTYPE HTML>
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
<li>F1
<ul>
<li><a href="#">Fernando Alonso</a></li>
<li><a href="#">Robert Kubica</a></li>
<li><a href="#">Nico Rosberg</a></li>
<li><a href="#">Emerson Fittipaldi</a></li>
<li><a href="#">Ayrton Senna</a></li>
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
$password = "haslo";
$user = "user";

if(isset($_POST["login"])) $login = $_POST["login"];
else $login = "anonymus";

if(isset($_POST["haslo"])) $haslo = $_POST["haslo"];
else $haslo = "wrong";

if($haslo == $password && $login == $user)
{
echo "Witaj: ".$login."<br />";
echo "Zalogowałeś się z nastepującymi opcjami:";
for($i=0;$i<count($_POST["opcje"]);$i++)
{
	echo $_POST["opcje"][$i]."<br />";
}
}
else
{
echo <<<END
<form action="logowanie.php">
Błędne dane wróć do strony logowania<br />
<input type="submit" value ="Wróć" />
</form>
END;

}


?>
</div>
<footer>&copy;&nbsp;Moto<span id="red">Race</span>&nbsp;2017</footer>
</div>

</body>
</html>
