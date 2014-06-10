<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="klasa, klasa 2c, klasa iic, klasa 1c, klasowa, nasza klasa, nasza, iic, ic, gimnazjum w kamiencu wroclawskim, gimnazjum, gim2kam, nk, forum, forum klasy, forum klasowe, klasowe, do pobrania, downloads, 2c, 1c, forum iic, forum ic, forum 1c, forum 2c">
		<meta name="description" content="Jest to strona internetowa klasy 2c. Znajduje się tutaj nasz plan lekcji, informacje z życia naszej klasy, nasza galeria zdjęć z wszystkich wspólnych wycieczek, forum klasowe, rozpiska dzwonków w naszej budzie, piosenki godne polecenia, rozkład jazdy autobusu szkolnego oraz mapy naszej gminy i poszczególnych wiosek.">
		<title>Kontakt do uczniów naszej klasy | Strona klasy 2c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="normalize.css" rel="stylesheet" type="text/css">
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
		<link href="arkusz_kontakt.css" rel="stylesheet" type="text/css">
		<link href="arkusz_onas_news_galeria_login_zlehaslo_kontakt.css" rel="stylesheet" type="text/css">
		<!--[if IE 6]><link href="arkusz_IE6.css" rel="stylesheet" type="text/css"><![endif]-->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<!--[if lt IE 8]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]><div style="clear: both; height: 42px; text-align: center;"><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" style="height: 42px; width: 820px;" alt="Używasz starej przeglądarki! Aby zaaktualizować przeglądarkę kliknij tutaj."></a></div><![endif]-->
		<!--<div style="position: absolute; right: 0px; top:0px; text-align: center; background: #49EFFB; padding: 15px;"><img src="images/*.png" alt="" width="200px" height="150px"><h2 style="color: #144B6B;"></h2></img></div>-->
		<nav id="panel">
			<script src="js/menu_boczne.js" type="text/javascript"></script>
			<a href="#" class="slide_button">Menu</a>
		</nav>
		<nav id="menu">
			<ul>
				<li class="first" id="first"><a href="index2.php">Strona główna</a></li>
				<li><a href="o_nas.html">O nas</a></li>
				<li><a href="news.php">Newsy</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="http://www.klasa-3c.pl/forum.php?access=u46584trhn847yr8">Forum</a></li>
				<li class="active"><a href="kontakt.php">Kontakt</a></li>
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
		<div id="page" class="contact">
			<?php
				$pass = telemyjka;
				$exit = u46584trhn847yr8;
				if($_POST){
				$haslo = $_POST['pass'];
				if($haslo == $pass){
					echo '
						<style>#panel_login {display: none;}</style>
						<div style="text-align: right; margin-bottom: 10px;">
						<form id="panel_wylog" name="panel_wylog" method="POST"> 
						<input type="hidden" name="pass" value="u46584trhn847yr8">
						<input type="submit" value="Wyloguj">
						</form>
						</div>
					';
					//include('js/contact.txt');
					include('polacz.php');
					$query = mysql_query("select * from users");
					echo '<table id="table_contact" style="padding: 0 5px;"><thead><tr><td>ID</td><td>Imię i Nazwisko</td><td>Telefon komórkowy</td><td>GG</td><td>Adres mail</td></tr></thead><tfoot><tr><td></td><td>Janina Mazur - Wychowawca</td><td>606307372</td><td>5321318</td><td>inazur@gmail.com</td></tr><tr><td></td><td>Administratorzy</td><td></td><td>25818212</td><td>gim2kam.klasa.2c@gmail.com</td></tr></tfoot><tbody>';
					while($rekord = mysql_fetch_array($query)){
						echo '<tr><td>'.$rekord[0].'.</td><td>'.$rekord[1].'</td><td>'.$rekord[2].'</td><td>'.$rekord[3].'</td><td>'.$rekord[4].'</td></tr>';
					}
					echo '</tbody></table>';
					echo '<div id="wakacje"><script type="text/javascript" src="js/wakacje.js"></script></div>';
				}
				elseif($haslo == $exit) {
				echo '<p>Wylogowano. Zaloguj się ponownie.</p>';
				}
				else {
				echo '<p class="red">Podałeś złe hasło!</p>';
				}
				}
			?>
			<form id="panel_login" name="panel_login" method="POST" style="margin: 56px 0;">
				<p style="margin: 2px; line-height: 130%; font-size: 16px; padding: 10px; font-weight: bold;"><label for="pass">Podaj hasło:</label></p>
				<p style="margin: 0px; line-height: 130%; padding: 10px;"><input type="password" id="pass" name="pass" maxlength="10" tabindex="1"><input type="submit" value="Zaloguj" tabindex="2"></p>
			</form>
		</div>
		<footer>
			<div id="foot">
				<p>Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> ::  <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a> :: <a href="http://www.facebook.com/sugam1996">sugam1996</a></p>
				<p>Aby poprawnie wyświetlać naszą stronę należy włączyć w przeglądarce obsługę Javascript.</p>
			</div>
			<div id="links">
				<a href="http://validator.w3.org/check?uri=referer"><img class="poprawny_html_css" src="images/valid-html401-blue.png" alt="Valid HTML 4.01 Strict!"></a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer"><img class="poprawny_html_css" src="images/valid-css-blue.png" alt="Poprawny CSS!"></a>
			</div>
		</footer>
	</body>
</html>
