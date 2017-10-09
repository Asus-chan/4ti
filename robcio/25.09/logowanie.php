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
	<form action="show.php" method="post">
	<fieldset>
	<legend>Dane Logowania</legend>
Login: <input type="text" name="login" value="" autofocus="autofocus" />
Hasło: <input type="password" name="password" value="" />
		</fieldset>
		<fieldset>
		<legend>Opcje Logowania</legend>
		<input type="checkbox" name="opcje[]" value="F1"/>F1<br/>
		<input type="checkbox" name="opcje[]" value="WRC"/>WRC<br/>
		<input type="checkbox" name="opcje[]" value="MotoGP"/>MotoGP<br/>
		</fieldset>
		<input type="submit" value="Zaloguj się" />
	</form>
</div>
<footer>&copy;&nbsp;Moto<span id="red">Race</span>&nbsp;2017</footer>
</div>

</body>
</html>