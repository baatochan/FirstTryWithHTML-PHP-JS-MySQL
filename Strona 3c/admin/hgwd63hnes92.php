<html lang="pl">
<head>
    <meta charset="UTF-8" />
	<title>Dodawanie newsów</title>
	
	<style type="text/css">
		form {
			margin 0px;
		}
		
		div {
			margin: 0px auto 0px auto;
			width: 670px;
		}
		
		#wyslij {
			text-align: right;
		}
	</style>
	<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		include("polacz.php");
		$pass = admin;
		if($_POST){
			$haslo = $_POST['pass'];
			if($haslo == $pass){
				echo '<form method="post"><p><label for="nazwa">Tytuł: </label><input type="text" name="nazwa" /></p><p><label for="data">Data: </label><input type="date" name="data" value="2011-09-01"/></p><p><label for="tresc">Treść newsa: </label></p><textarea name="tresc" cols="80" rows="5"></textarea><input type="hidden" name="pass" value="admin"><p id="wyslij"><input type="submit" value="Dodaj newsa" /></p></form>';
				$spr = $_POST['nazwa'];
				if($spr != NULL) {
					$query = mysql_query("INSERT INTO news(nazwa, data, tresc) values ('".$_POST['nazwa']."', '".$_POST['data']."', '".$_POST['tresc']."')");
					echo 'News dodany!';
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
</body>
</html>