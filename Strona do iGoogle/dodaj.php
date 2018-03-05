<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona domowa, bartoszka1996, strona startowa, igoogle, home">
		<meta name="description" content="Jest to strona domowa webmastera bartoszka1996, zawierająca iframe z iGoogle i linki do najczęściej używanych stron.">
		<title>Strona domowa - bartoszka1996</title>
		<!--<link href="favicon.ico" rel="shortcut icon" type="image/ico">-->
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="page" class="dodaj_usun">
			<?php
				include("polacz.php");
				$pass = xxx;
				if($_POST){
					$haslo = $_POST['pass'];
					if($haslo == $pass){
						echo '<form method="post"><p><label for="nazwa">Nazwa: </label><input type="text" name="nazwa"></p><p><label for="adres">Ikona: </label><input type="text" name="favicon"></p><p><label for="adres">Adres: </label><input type="text" name="adres"><input type="hidden" name="pass" value="xxx"></p><input type="hidden" name="pass" value="xxx"><p><input type="submit" value="Dodaj zakładkę"></p></form>';
						$spr = $_POST['nazwa'];
						if($spr != NULL) {
							if($_SERVER['REQUEST_METHOD'] == 'POST'){
								$query = mysql_query("INSERT INTO linki(adres, favicon, nazwa) values ('".$_POST['adres']."', '".$_POST['favicon']."', '".$_POST['nazwa']."')");
								echo '<p>Zakładkę dodano! <a href="index.php">Wróć</a></p>';
							}
						}
					}
					else {
						echo '<p class="zle_haslo">Podałeś złe hasło!</p>';
						echo '<form id="panel" name="panel_login" method="POST"><label for="pass">Podaj hasło:</label><input type="password" id="pass" name="pass" maxlength="10"><input type="submit" value="Zaloguj"></form>';
					}
				}
				else {
					echo '<form id="panel" name="panel_login" method="POST"><label for="pass">Podaj hasło:</label><input type="password" id="pass" name="pass" maxlength="10"><input type="submit" value="Zaloguj"></form>';
				}
			?>
			<footer>
				<p>~~Designed by <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a></p>
			</footer>
		</div>
	</body>
</html>