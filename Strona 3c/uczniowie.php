<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Lista uczniów | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet">
		<link href="arkusz_bok.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<script src="js/uczniowie.js" type="text/javascript"></script>
		<!--[if lt IE 8]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<nav id="panel">
			<ul id="main_menu">
				<li><a href="plan_lekcji.html">Plan lekcji</a></li>
				<li><a href="dzwonki.html">Dzwonki</a></li>
				<li><a href="uczniowie.php">Lista uczniów</a></li>
				<li><a href="nauczyciele.php">Lista nauczycieli</a></li>
				<li><a href="kalendarz.php">Kalendarz</a></li>
				<li><a href="autobus.html">Autobus szkolny</a></li>
				<li><a href="rekrutacja.html">Rekrutacja</a></li>
			</ul>
			<a href="#" class="slide_button">Menu</a>
		</nav>
		<nav id="menu">
			<ul>
				<li class="first"><a href="index.php">Strona główna</a></li>
				<li><a href="o_nas.php">O nas</a></li>
				<li><a href="news.php">Newsy</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="forum.php?access=u46584trhn847yr8">Forum</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
		</nav>
		<header>
			<div id="zdjecie_klasowe">
				<img src="images/zdjecie_klasowe.jpg" alt="Zdjęcie klasowe">
			</div>
			<div id="napis_logo" style="position: relative;">
				<h1>Strona klasy IIIc</h1>
				<!-- +1 buttom -->
				<div style="position: absolute; right: 5px; bottom: 5px; margin-right: -36px; z-index: 1;">
					<div class="g-plusone" data-href="http://klasa-3c.c0.pl/"></div>
					<script type="text/javascript">
					  window.___gcfg = {lang: 'pl'};

					  (function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</div>
			</div>
		</header>
		<div id="page">
			<h2 class="title">Lista uczniów</h2>
			<p style="text-align: right; font-size: 10px;"><a href="#" id="ucz_link">Zmień widok</a></p>
			<div id="ucz_new">
				<?php
					include('polacz.php');//dolaczenie pliku laczacego z baza
					$query = mysql_query("select id, imie, nazwisko, miejscowosc, mi_d from uczniowie limit 25");//zapytanie do bazy
					echo '<div style="clear: both;"></div>';//pobrawienie wyswietlania
					while($rekord = mysql_fetch_array($query)){//petla wyswietlajaca dane z bazy
						echo '<div class="osoba"><img alt="'.$rekord[1].' '.$rekord[2].'" src="images/'.$rekord[2].'.png"><p class="p1">'.$rekord[1].' '.$rekord[2].'</p><p class="p2"'.$rekord[4].'>'.$rekord[3].'</p></div>';//szablon dla jednego ucznia
					}
					echo '<div style="clear: both;"></div>';//pobrawienie wyswietlania
				?>
			</div>
			<div id="ucz_old" style="display: none;">
				<?php
					include('polacz.php');//dolaczenie pliku laczacego z baza
					$query = mysql_query("select id, imie, nazwisko from uczniowie limit 25");//zapytanie do bazy
					echo '<ol>';//aktywacja listy numer
					while($rekord = mysql_fetch_array($query)){//petla wyswietlajaca dane z bazy
						echo '<li>'.$rekord[1].' '.$rekord[2].'</li>';//szablon dla jednego ucznia
					}
					echo '</ol>';//dezaktywacja listy numer
				?>
			</div>
			<div id="wakacje"><p style="line-height: 90%;"><script type="text/javascript" src="js/egzamin.js"></script></p><p style="line-height: 90%;"><script type="text/javascript" src="js/wakacje.js"></script></p></div>
		</div>
		<footer>
			<div id="foot">
				<p>Designed by: <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> :: <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a> :: <a href="http://www.facebook.com/sugam1996">sugam1996</a></p>
				<p>Aby poprawnie wyświetlać naszą stronę należy włączyć w przeglądarce obsługę Javascript.</p>
			</div>
			<div id="links">
				<a href="http://validator.w3.org/check?uri=referer"><img class="poprawny_html_css" src="images/valid-html401-blue.png" alt="Valid HTML 4.01 Strict!"></a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer"><img class="poprawny_html_css" src="images/valid-css-blue.png" alt="Poprawny CSS!"></a>
			</div>
		</footer>
		<script src='http://app.sugester.pl/klasa-3c/widget.js?1313590853' type='text/javascript'></script>
	</body>
</html>
