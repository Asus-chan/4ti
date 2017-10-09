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
<form action="showme.php" method="post">
<fieldset>
<legend>Dane logowania:</legend>
login: <input type="text" name="login" value="" autofocus="autofocus" />
hasło: <input type="password" name="haslo" value="" />
</fieldset>
<fieldset>
<legend>opcje logowania:</legend>
<input type="checkbox" name="opcje[]" value="F1"/>F1<br />
<input type="checkbox" name="opcje[]" value="WRC"/>WRC<br />
<input type="checkbox" name="opcje[]" value="MotoGP"/>MotoGP<br />
</fieldset>
<input type="submit" value="Zaloguj się" />
</form>
</div>
<footer>&copy;&nbsp;Moto<span id="red">Race</span>&nbsp;2017</footer>
</div>

</body>
</html>