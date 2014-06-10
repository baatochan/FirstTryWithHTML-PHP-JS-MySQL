<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<title>Edytuj powiadomienia o spr</title>
	<body>
		<?php
		if($_POST){
			include("polacz.php");
			$query = mysql_query("UPDATE  `powiadomienia` SET  `tresc` =  '".$_POST['tresc']."',`pokaz` =  '".$_POST['pokaz']."' WHERE  `id` =1 LIMIT 1 ;");
			echo '<p>Zaaktualizowałeś powiadomienie, aby powtórzyć kliknij <a href="powiadomienia.php">tutaj</a>, aby cofnąć kliknij <a href="index.html">tu</a>.</p>';
		}
		else {
			echo '<div><form method="post"><textarea name="tresc" id="tresc" cols="20" rows="5">Wpisz tresc powiadomienia</textarea><p><input type="radio" name="pokaz" value="y" />Pokaz<input type="radio" name="pokaz" value="n" />Ukryj</p><button type="submit">Wyslij</button></form></div>';
		}
		?>
	</body>
</html>