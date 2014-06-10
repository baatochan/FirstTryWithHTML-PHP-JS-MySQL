<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="3; url=http://www.klasa-3c.c0.pl">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="google-site-verification" content="M6fEtMpkfYjA3HxQ2GayiMgqIsXX33UroRdcoJBVOtg" />
		<meta name="keywords" content="klasa, klasa 2c, klasa iic, klasa 1c, klasowa, nasza klasa, nasza, iic, ic, gimnazjum w kamiencu wroclawskim, gimnazjum, gim2kam, nk, forum, forum klasy, forum klasowe, klasowe, do pobrania, downloads, 2c, 1c, forum iic, forum ic, forum 1c, forum 2c">
		<meta name="description" content="Jest to strona internetowa klasy 2c. Znajduje się tutaj nasz plan lekcji, informacje z życia naszej klasy, nasza galeria zdjęć z wszystkich wspólnych wycieczek, forum klasowe, rozpiska dzwonków w naszej budzie, piosenki godne polecenia, rozkład jazdy autobusu szkolnego oraz mapy naszej gminy i poszczególnych wiosek.">
		<title>Strona główna | Strona klasy 2c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
		<link href="arkusz_index.css" rel="stylesheet" type="text/css">		<!--[if IE 6]><link href="arkusz_IE6.css" rel="stylesheet" type="text/css"><![endif]-->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<script type="text/javascript">
			alert('Za 3 sek. po kliknięciu "OK" zostaniesz przekierowany na naszą nową stronę. Jeśli nie chcesz kliknij "OK", a potem "Strona główna" w górnym menu.');
		</script>
		<!--[if lt IE 8]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<body>
		<!--[if lt IE 7]><div style="clear: both; height: 42px; text-align: center;"><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" style="height: 42px; width: 820px;" alt="Używasz starej przeglądarki! Aby zaaktualizować przeglądarkę kliknij tutaj."></a></div><![endif]-->
		<!--<div style="position: absolute; right: 0px; top:0px; text-align: center; background: #49EFFB; padding: 15px;"><img src="images/*.png" alt="" width="200px" height="150px"><h2 style="color: #144B6B;"></h2></img></div>-->
		<nav id="panel">
			<script src="js/menu_boczne.js" type="text/javascript"></script>
			<a href="#" class="slide_button">Menu</a>
		</nav>
		<nav id="menu">
			<ul>
				<li class="active"><a href="index2.php">Strona główna</a></li>
				<li><a href="o_nas.html">O nas</a></li>
				<li><a href="news.php">Newsy</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="http://www.klasa-3c.pl/forum.php?access=u46584trhn847yr8">Forum</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
		</nav>
		<header>
			<div id="zdjecie_klasowe">
				<img src="images/zdjecie_klasowe.jpg" alt="Zdjęcie klasowe">
			</div>
			<div id="napis_logo">
				<h1>Strona klasy IIc</h1>
			</div>
		</header>
		<div id="page" class="index">
			<div id="motto"><h4>Forum już działa! Zapraszamy do rejestracji.<!--<script src="js/motto.js" type="text/javascript"></script>--></h4></div>
			<div id="witamy">
				<h1>Witamy na naszej stronie!</h1>
				<div id="logo2"><img src="images/img07.png" alt="Logo IIc"></div>
				<p>Witamy na stronie klasy 2c i zapraszamy do jej obejrzenia. Znajdziesz tu wiele ciekawych informacji z naszego klasowego życia, znajduje się tu galeria zdjęć, plan lekcji i forum naszej klasy.</p>
				<p>Klasa liczy 24 osoby, z czego 8 dziewczyn i 16 chłopaków. Wychowawczynią jest p. Janina Mazur.</p>
				<h2>Co w trawie piszczy?</h2>
				<?php
					include("polacz.php");
					$query = mysql_query("select tresc from news order by id desc limit 1");
					$rekord = mysql_fetch_array($query);
					echo '<p>'.$rekord[0].'</p>';
				?>
			</div>
			<div id="samorzad" class="samorzad_newsy">
				<h2 class="title">Samorząd klasowy</h2>
				<ul>
					<li>PRZEWODNICZĄCY - Sugam Mittal</li>
					<li>ZASTĘPCA - Angelika Kruczek</li>
					<li>SKARBNIK - Natalia Kosiorek</li>
					<li>FOTOGRAF - Kasia Moniuszko</li>
				</ul>
			</div>
			<div id="newsy" class="samorzad_newsy">
				<h2 class="title">Newsy</h2>
				<ul>
					<?php
						$query = mysql_query("select id, nazwa, data from news order by id desc limit 4");
						while($rekord = mysql_fetch_array($query)){
							echo '<li><h3>'.$rekord[2].'</h3><p><a href="news.php#news'.$rekord[0].'">'.$rekord[1].'</a></p></li>';
						}
					?>
				</ul>
			</div>
			<div id="wakacje"><script type="text/javascript" src="js/wakacje.js"></script></div>
		</div>
		<footer>
			<div id="foot">
				<p>Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> ::  <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a> :: <a href="http://www.facebook.com/sugam1996">sugam1996</a></p>
				<p>Aby poprawnie wyświetlać naszą stronę należy włączyć w przeglądarce obsługę Javascript.</p>
				<p id="licznik_wejsc"><script type="text/javascript" src="http://www.darmowe-liczniki.pl/usluga.licznik.19617"></script></p>
			</div>
			<div id="links">
				<a href="http://validator.w3.org/check?uri=referer"><img class="poprawny_html_css" src="images/valid-html401-blue.png" alt="Valid HTML 4.01 Strict!"></a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer"><img class="poprawny_html_css" src="images/valid-css-blue.png" alt="Poprawny CSS!"></a>
			</div>
		</footer>
		<script src="http://app.sugester.pl/klasa-2c/widget.js" type="text/javascript"></script>
	</body>
</html>
