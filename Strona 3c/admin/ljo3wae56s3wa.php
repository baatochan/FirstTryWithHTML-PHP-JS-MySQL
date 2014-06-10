<html lang="pl">
<head>
    <meta charset="UTF-8" />
	<title>Dodawanie do kalendarza</title>
	
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
		$data1 = date("Y-m-d");
		$data2 = date("Ymd");
		$pass = admin;
		if($_POST){
			$haslo = $_POST['pass'];
			if($haslo == $pass){
				echo '<form method="post"><p><label for="data">Data: </label><input type="date" name="data" id="data" value="'.$data1.'"/> Data w formie YYYY-MM-DD</p><p><label for="sort">Data2: </label><input type="text" name="sort" id="sort" value="'.$data2.'"/> Data w formie YYYYMMDD</p><p><label for="tresc">Co: </label><input type="text" name="tresc" id="tresc" /></p><p><label for="tresc">Sprawdzian? </label><input type="text" name="spr" id="spr" /><input type="hidden" name="pass" value="admin"> Jeśli tak pisz "spr" jesli nie zostaw puste</p><p id="wyslij"><input type="submit" value="Dodaj wydarzenie" /></p></form>';
				$spr1 = $_POST['tresc'];
				if($spr1 != NULL) {
					$query = mysql_query("INSERT INTO  `kalendarz` (  `data` ,  `sort` ,  `tresc` ,  `spr` ) VALUES ( '".$_POST['data']."',  '".$_POST['sort']."',  '".$_POST['tresc']."',  '".$_POST['spr']."');");
					echo 'Wydarzenie dodane!';
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