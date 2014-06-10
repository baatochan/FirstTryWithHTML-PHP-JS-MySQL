<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>O nas | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet">
		<link href="arkusz_gora.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/onas.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
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
				<li class="active"><a href="o_nas.php">O nas</a></li>
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
			<div id="page" class="profil">
				<?php
					$access = $_GET['access'];//ustalenie zmiennej dajacej dostep
					$id = $_GET['id'];//pobranie zmiennej ktora ma ustalic jakie id ma poibrac z bazy danych
					$spr = u46584trhn843yr8;//kod dostepu z onas
					$spr2 = u46574trhn843yr8;//kod dostepu z kontakt
					if ($access == $spr) {//sprawdzenie poprawnosci dostepu
						echo '<div style="text-align: right; margin-bottom: 10px;"><form id="wroc" name="wroc" method="POST" action="o_nas.php"><input type="hidden" name="pass" value="dezorganizacja"><input type="submit" value="Wróć"></form></div>';
						include('polacz.php');//dolaczenie pliku laczacego z baza
						$query = mysql_query("select * from uczniowie where id='".$id."'");//zapytanie do bazy
						$rekord = mysql_fetch_array($query);//jakies ztentegowienie wynikow bazy danych aby moc wyswietlic wyniki
						echo '<div style="float: left;margin: 0;text-align: center;margin-right: 15px;"><p style="margin: 0;"><img src="images/'.$rekord[2].'" alt="'.$rekord[1].' '.$rekord[2].'" style="border: 5px solid black;width: 200px;"></p><p style="margin: 0;">	<a href="'.$rekord[23].'" '.$rekord[24].'><img src="images/fb.png" alt="Facebook" style="margin: 5px;margin-top: 0;margin-bottom: 0;"></a><a href="'.$rekord[25].'" '.$rekord[26].'><img src="images/nk.png" alt="nk" style="margin: 5px;  margin-top: 0;  margin-bottom: 0;"></a><a href="'.$rekord[27].'" '.$rekord[28].'><img src="images/gp.png" alt="Google+" style="margin: 5px;  margin-top: 0;  margin-bottom: 0;"></a></p></div><h2>'.$rekord[1].' '.$rekord[2].'</h2><h3 style="margin-top: 10px;text-align:;">Dane kontaktowe</h3><p '.$rekord[10].'>Tel. kom. '.$rekord[9].'</p><p '.$rekord[12].'>Tel. stacj. '.$rekord[11].'</p><p '.$rekord[30].'>Mail: '.$rekord[29].'</p><p '.$rekord[18].'>GTalk: '.$rekord[17].'</p><p '.$rekord[14].'>GG: '.$rekord[13].'</p><p '.$rekord[16].'>Skype: '.$rekord[15].'</p><p '.$rekord[20].'>'.$rekord[19].'</p><div style="clear: both;"></div><div id="profil_l" style="width: 360px;float: left;"><h3 style="text-align: center;">O mnie</h3><div '.$rekord[22].'><p>'.$rekord[21].'</p></div></div><div id="profil_r" style="width: 360px;float: right;text-align: center;"><h3 style="text-align: center;">Adres</h3><p '.$rekord[7].'>ul. '.$rekord[5].' '.$rekord[6].'</p><p '.$rekord[4].'>'.$rekord[8].' '.$rekord[3].'</p><p>Polska</p></div>';//miejsce na wyswietlenie wynikow bazy danych
					}
					elseif ($access = $spr2) {//sprawdzenie poprawnosci dostepu
					echo '<div style="text-align: right; margin-bottom: 10px;"><form id="wroc" name="wroc" method="POST" action="kontakt.php"><input type="hidden" name="pass" value="dezorganizacja"><input type="submit" value="Wróć"></form></div>';
						include('polacz.php');//dolaczenie pliku laczacego z baza
						$query = mysql_query("select * from uczniowie where id='".$id."'");//zapytanie do bazy
						$rekord = mysql_fetch_array($query);//jakies ztentegowienie wynikow bazy danych aby moc wyswietlic wyniki
						echo '<div style="float: left;margin: 0;text-align: center;margin-right: 15px;"><p style="margin: 0;"><img src="images/'.$rekord[2].'" alt="'.$rekord[1].' '.$rekord[2].'" style="border: 5px solid black;width: 200px;"></p><p style="margin: 0;">	<a href="'.$rekord[23].'" '.$rekord[24].'><img src="images/fb.png" alt="Facebook" style="margin: 5px;margin-top: 0;margin-bottom: 0;"></a><a href="'.$rekord[25].'" '.$rekord[26].'><img src="images/nk.png" alt="nk" style="margin: 5px;  margin-top: 0;  margin-bottom: 0;"></a><a href="'.$rekord[27].'" '.$rekord[28].'><img src="images/gp.png" alt="Google+" style="margin: 5px;  margin-top: 0;  margin-bottom: 0;"></a></p></div><h2>'.$rekord[1].' '.$rekord[2].'</h2><h3 style="margin-top: 10px;text-align:;">Dane kontaktowe</h3><p '.$rekord[10].'>Tel. kom. '.$rekord[9].'</p><p '.$rekord[12].'>Tel. stacj. '.$rekord[11].'</p><p '.$rekord[30].'>Mail: '.$rekord[29].'</p><p '.$rekord[18].'>GTalk: '.$rekord[17].'</p><p '.$rekord[14].'>GG: '.$rekord[13].'</p><p '.$rekord[16].'>Skype: '.$rekord[15].'</p><p '.$rekord[20].'>'.$rekord[19].'</p><div style="clear: both;"></div><div id="profil_l" style="width: 360px;float: left;"><h3 style="text-align: center;">O mnie</h3><div '.$rekord[22].'><p>'.$rekord[21].'</p></div></div><div id="profil_r" style="width: 360px;float: right;text-align: center;"><h3 style="text-align: center;">Adres</h3><p '.$rekord[7].'>ul. '.$rekord[5].' '.$rekord[6].'</p><p '.$rekord[4].'>'.$rekord[8].' '.$rekord[3].'</p><p>Polska</p></div>';//miejsce na wyswietlenie wynikow bazy danych
					}
					else {//gdy zly kod dostepu w pasku adresu
						echo '<p class="alert">Coś jest nie tak. Spróbuj ponownie.</p>';//alert gdy brak kodu dostepu
					}
				?>
			<div id="wakacje"><p style="line-height: 90%;"><script type="text/javascript" src="js/egzamin.js"></script></p><p style="line-height: 90%;"><script type="text/javascript" src="js/wakacje.js"></script></p></div>
			</div>
			<footer>
			<div id="foot">
				<p>Designed by: <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> ::  <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a> ::  <a href="http://www.facebook.com/sugam1996">sugam1996</a></p>
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
