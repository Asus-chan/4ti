<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>
<?php
if(isset($_POST["login"])) $login = $_POST["login"];
else $login = "anonim";
echo "Twój login: ".$login. "<br />";
if(isset($_REQUEST["haslo"])) $haslo = $_REQUEST["haslo"];
else $haslo = "haslo";
echo "Twoje hasło: ".$haslo. "<br />";
$haslo_sz = md5($haslo);
echo "hasło zaszyfrowane: ".$haslo_sz."<br />";

if(isset($_POST["zupy"]))
{
	echo "Wybrane zupy:<br />";
	$ile = count($_POST["zupy"]);
	for($i=0;$i<$ile)
	{
		echo ($_POST["zupy"][$i].", ");
	}
}else echo "Nie wybrano żadnego koloru.<br />";

if(isset($_POST["owoce:<br />"
?>
<form action="form.php">
<input type="submit" value="wróć do formularza" />
</form>
</body>
</html>