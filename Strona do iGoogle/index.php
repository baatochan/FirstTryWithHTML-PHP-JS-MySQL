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
		<div id="body">
			<div id="page">
				<div id="komendy">
					<h4>Komendy:</h4>
					<p><a href="dodaj.php">Dodaj</a></p>
					<p><a href="usun.php">Usuń</a></p>
				</div>
				<?php
					include("polacz.php");
					$query = mysql_query("select id, adres, nazwa from linki");
					while($rekord = mysql_fetch_array($query)){
						echo '<div class="bookmark" title="'.$rekord[0].'"><a href="'.$rekord[1].'" target="_top"><img src="'.$rekord[1].'favicon.ico" alt="'.$rekord[2].'"><p>'.$rekord[2].'</p></a></div>';
					}
				?>
				<div style="clear: both;"></div>
			</div>
			<footer>
				<p>~~Designed by <a href="http://www.facebook.com/bartoszka1996">bartoszka1996</a></p>
			</footer>
		</div>
	</body>
</html>
