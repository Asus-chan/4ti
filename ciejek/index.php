<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="form.css" />
    <title></title>
  </head>
  <body>
    <form action="odbierz.php" method="post">
      <fieldset>
        <legend> Dane personalne:</legend>
        <label for="login">login:</label>
      login:&nbsp;<input id="login" type="text" name="login" value="" placeholder="twój login" autofocus="autofocus" /><br>
    <label>  haslo:&nbsp;<input type="password" name="haslo" value="" placeholder="hasło" /></label><br>
      email:&nbsp;<input type="email" name="email" value="" placeholder="email" required="required" /><br>
      data:&nbsp;<input type="date" name="data_ur" value="" placeholder="data urodzenia" required="required" /><br>
      url:&nbsp;<input type="url" name="url" value="" placeholder="url"  /><br>
      plik:&nbsp;<input type="file" name="file"  placeholder="plik" /><br><!-- Działa tylko z metodą POST-->
      <input type="hidden" name="topsecret" value="xyz" />
    </fieldset>
    <fieldset>
      opis: <textarea name="opis" rows="5" cols="50"> </textarea><br />
      Kolor:<select name="kolory">
        <option value="czerwony">czerwony</option>
        <option value="zielony">zielon</option>
        <option value="pomaranczowy">pomarańczowy</option>
        <option value="czarny">czarny</option>
        <option value="fioletowy">fioletowy</option>
        <option value="brazowy">brązowy</option>
      </select>
      Owoce:<select name="owoce[]" multiple>
        <option value="banan">banan</option>
        <option value="jablko">jabłko</option>
        <option value="melon">melon</option>
        <option value="ananas">ananas</option>
        <option value="pozeczka">pożeczka</option>
      </select> <br />
      Która klasa? <br />
      <input type="radio" name="klasa" value="1" />pierwsza<br />
      <input type="radio" name="klasa" value="2" />druga<br />
      <input type="radio" name="klasa" value="3" />trzecia<br />
      <input type="radio" name="klasa" value="4" />czwarta<br />

      Ulubione jedzenie:
      <input type="checkbox" name="papu[]" value="pizza" />pizza <br />
      <input type="checkbox" name="papu[]" value="pierogi" />pierogi <br />
      <input type="checkbox" name="papu[]" value="bigos" />bigos <br />
      <input type="checkbox" name="papu[]" value="szyszki" />szyszki <br />
      <input type="checkbox" name="papu[]" value="frytki" />frytki <br />
      <br />
      <input type="submit" value="WYSLIJ">&nbsp;
      <input type="image" src="go.png">&nbsp;
      <button> <img src="rec.png" alt="" width="20" height="20" />nagraj</button>


    </fieldset>
    </form>
  </body>
</html>
