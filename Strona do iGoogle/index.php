<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona domowa, bartoszka1996, strona startowa, igoogle, home">
		<meta name="description" content="Jest to strona domowa webmastera bartoszka1996, zawierająca iframe z iGoogle i linki do najczęściej używanych stron.">
		<title>Strona domowa - bartoszka1996</title>
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="page">
			<?php
					include("polacz.php");
					$query = mysql_query("select * from linki order by id");
					$lp = 1;
					while($rekord = mysql_fetch_array($query)){
						echo '<div class="bookmark" style="z-index: '.$lp.';" title="'.$rekord[0].'"><a href="'.$rekord[1].'" target="_top"><div class="img"><img src="'.$rekord[2].'" alt="'.$rekord[3].'"></div><p>'.$rekord[3].'</p></a></div>';
						$lp = $lp + 1;
					}
			?>
			<div style="clear: both;"></div>
		</div>
		<footer>
			<div id="f_left">
				<p><a href="dodaj.php">Dodaj</a> :: <a href="usun.php">Usuń</a></p>
			</div>
			<div id="f_right">
				<p>~~Designed by <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a></p>
			</div>
			<div style="clear: both;"></div>
		</footer>
	</body>
</html>