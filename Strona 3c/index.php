<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Strona główna | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet">
		<link href="arkusz_index.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<!--[if lt IE 8]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php
			include("polacz.php");
			$query = mysql_query("SELECT * FROM `powiadomienia` WHERE  `id` =1");
			$rekord = mysql_fetch_array($query);
			if($rekord[2] == y){
				echo '<script type="text/javascript">alert("'.$rekord[1].'");</script>';
			}
		?>
	</head>
	<body>
		<!--[if lt IE 7]><div style="clear: both; height: 42px; text-align: center;"><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" style="height: 42px; width: 820px;" alt="Używasz starej przeglądarki! Aby zaaktualizować przeglądarkę kliknij tutaj."></a></div><![endif]-->
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
				<li class="active"><a href="index.php">Strona główna</a></li>
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
		<div id="page" class="index">
			<?php
				$query = mysql_query("SELECT * FROM `powiadomienia` WHERE  `id` =2");
				$rekord = mysql_fetch_array($query);
				if($rekord[2] == y){
					echo '<p id="motto">'.$rekord[1].'</p>';
				}
				elseif($rekord[2] == n){
					echo '<p id="motto">&nbsp;</p>';
				}
			?>
			<div id="witamy">
				<h1>Witamy na naszej stronie!</h1>
				<div id="logo2"><img src="images/img07.png" alt="Logo IIIIc"></div>
				<p>Witamy na stronie klasy 3c i zapraszamy do jej obejrzenia. Znajdziesz tu wiele ciekawych informacji z naszego klasowego życia, znajduje się tu galeria zdjęć, plan lekcji i nasze klasowe forum.</p>
				<p>Klasa liczy 25 osoby, z czego 9 dziewczyn i 16 chłopaków. Wychowawczynią jest p. Janina Mazur.</p>
				<?php
					$data = date("Ymd");//cala data (YYYYMMDD)
					$mies = date("m");//miesiac
					$tyg = date("N");//dzien tyg(1-7)
					$dzien = date("d");//dzien (1-31)
					$przest = date("L");//przestepny(0/1)
					$godz = date("H");//godzina
					if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 5) {
						if ($godz < 12) {
							echo '<h2>Co dzisiaj w budzie?</h2>';
							$query = mysql_query("select * from kalendarz where sort=".$data." order by data");
							$wiersze = mysql_num_rows($query);
							$liczbaporz = 1;
							if ($wiersze == 0){
								echo '<p>Dzisiaj nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
							}
							elseif ($wiersze == 1){
								$rekord = mysql_fetch_array($query);
								echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
							}
							else {
								while($rekord = mysql_fetch_array($query)){
									echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
									$liczbaporz = $liczbaporz + 1;
								}
							}
						}
						else {
							echo '<h2>Co jutro w budzie?</h2>';
							include("index_kalendarz.php");
							$query = mysql_query("select * from kalendarz where sort=".$liczba123." order by data");
							$wiersze = mysql_num_rows($query);
							$liczbaporz = 1;
							if ($wiersze == 0){
								echo '<p>Jutro nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
							}
							elseif ($wiersze == 1){
								$rekord = mysql_fetch_array($query);
								echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
							}
							else {
								while($rekord = mysql_fetch_array($query)){
									echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
									$liczbaporz = $liczbaporz + 1;
								}
							}
						}
					}
					else {
						echo '<h2>Co jutro w budzie?</h2>';
						include("index_kalendarz.php");
						$query = mysql_query("select * from kalendarz where sort=".$liczba123." order by data");
						$wiersze = mysql_num_rows($query);
						$liczbaporz = 1;
						if ($wiersze == 0){
							echo '<p>Jutro nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
						}
						elseif ($wiersze == 1){
							$rekord = mysql_fetch_array($query);
							echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
						}
						else {
							while($rekord = mysql_fetch_array($query)){
								echo '<p><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
								$liczbaporz = $liczbaporz + 1;
							}
						}
					}
					//echo ''.$data.' ';echo ''.$mies.' ';echo ''.$tyg.' ';echo ''.$dzien.' ';echo ''.$przest.' ';echo ''.$godz.' ';echo ''.$liczba123.' ';
				?>
				<h2>Co w trawie piszczy?</h2>
				<?php
					$query = mysql_query("select data, tresc from news order by id desc limit 1");
					$rekord = mysql_fetch_array($query);
					echo '<p><span style="font-weight: bold;">'.$rekord[0].': </span>'.$rekord[1].'</p>';
				?>
			</div>
			<div id="samorzad" class="samorzad_newsy">
				<h2 class="title">Samorząd klasowy</h2>
				<ul>
					<li>PRZEWODNICZĄCY - Natalia Kosiorek</li>
					<li>ZASTĘPCA - Sugam Mittal</li>
					<li>SKARBNIK - Bartosz Rodziewicz</li>
				</ul>
			</div>
			<div id="newsy" class="samorzad_newsy">
				<h2 class="title">Newsy</h2>
				<ul>
					<?php
						$query = mysql_query("select id, nazwa, data from news order by id desc limit 3");
						while($rekord = mysql_fetch_array($query)){
							echo '<li><h3>'.$rekord[2].'</h3><p><a href="news.php#news'.$rekord[0].'">'.$rekord[1].'</a></p></li>';
						}
					?>
				</ul>
			</div>
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
		<p style="display: none;"><script type="text/javascript" src="http://www.darmowe-liczniki.pl/usluga.licznik.23450"></script></p>
		<script src='http://app.sugester.pl/klasa-3c/widget.js?1313590853' type='text/javascript'></script>
	</body>
</html>