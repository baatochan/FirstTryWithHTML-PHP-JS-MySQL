<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="klasa, klasa 2c, klasa iic, klasa 1c, klasowa, nasza klasa, nasza, iic, ic, gimnazjum w kamiencu wroclawskim, gimnazjum, gim2kam, nk, forum, forum klasy, forum klasowe, klasowe, do pobrania, downloads, 2c, 1c, forum iic, forum ic, forum 1c, forum 2c">
		<meta name="description" content="Jest to strona internetowa klasy 2c. Znajduje się tutaj nasz plan lekcji, informacje z życia naszej klasy, nasza galeria zdjęć z wszystkich wspólnych wycieczek, forum klasowe, rozpiska dzwonków w naszej budzie, piosenki godne polecenia, rozkład jazdy autobusu szkolnego oraz mapy naszej gminy i poszczególnych wiosek.">
		<title>Newsy | Strona klasy 2c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="normalize.css" rel="stylesheet" type="text/css">
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
		<link href="arkusz_onas_news_galeria_login_zlehaslo_kontakt.css" rel="stylesheet" type="text/css">
		<!--[if IE 6]><link href="arkusz_IE6.css" rel="stylesheet" type="text/css"><![endif]-->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<!--[if lt IE 8]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
				<li class="active"><a href="news.php">Newsy</a></li>
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
		<div id="page">
			<?php
				include("polacz.php");
				$query = mysql_query("select * from news order by id desc"); //where nazwa = 'xxx'  order by id = 'desc'
				while($rekord = mysql_fetch_array($query)){
				echo '<h2 id="news'.$rekord[0].'">'.$rekord[1].'</h2><h3>'.$rekord[2].'</h3><p>'.$rekord[3].'</p>';
				$query1 = mysql_query("select * from coments where koment = '".$rekord[0]."'");
				$wiersze = mysql_num_rows($query1);
				echo '
				<script type="text/javascript">
				$(document).ready(
					function(){	
						$("#p_k'.$rekord[0].'").click(
							function(){
								$("#komentarze'.$rekord[0].'").toggle("2000");
							}
						)
						.toggle(
							function(){
								$(this).text("Ukryj komentarze");
							},
							function(){
								$(this).text("Pokaż komentarze"); 
							}
						);
					}
				);
				</script>';
				echo '<h3>Komentarze ('.$wiersze.'):</h3><p><a href="#news'.$rekord[0].'" id="p_k'.$rekord[0].'" style="font-weight: bold;">Pokaż komentarze</a></p><div id="komentarze'.$rekord[0].'" style="display: none;">';
				while($rekord1 = mysql_fetch_array($query1)){
				echo '<p style="margin-left: 15px;"><span style="font-weight: bold;">'.$rekord1[1].':</span>'.$rekord1[2].'</p>';
				}
				echo '</div>';
				echo '
					<script type="text/javascript">
					$(document).ready(
						function(){	
							$("#d_k'.$rekord[0].'").click(
								function(){
									$("#dodaj_komentarz'.$rekord[0].'").toggle("2000");
								}
							)
							.toggle(
								function(){
									$(this).text("Anuluj");
								},
								function(){
									$(this).text("Dodaj nowy komentarz"); 
								}
							);
						}
					);
					</script>
					<p><a href="#news'.$rekord[0].'" id="d_k'.$rekord[0].'" style="font-weight: bold;">Dodaj nowy komentarz</a></p>
					<div id="dodaj_komentarz'.$rekord[0].'" style="display: none; width: 417px;">
						<form action="" method="post">
							<p><label for="autor" style="font-weight: bold;">Autor:</label>
							<input type="text" name="autor" /></p>
							<p><label for="tresc" style="font-weight: bold;">Treść komentarza:</label></p>
							<textarea name="tresc" cols="50" rows="3"></textarea>
							<input type="hidden" name="koment" value="'.$rekord[0].'">
							<p style="text-align: right;"><input type="submit" value="Dodaj komentarz" /></p>
						</form></div>
				';
				}
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$query = mysql_query("INSERT INTO coments(autor, tresc, koment) values ('".$_POST['autor']."', '".$_POST['tresc']."', '".$_POST['koment']."')");
				echo '<div id="koment_dodany"><p style="font-weight: bold; margin-bottom: 0px;">Twój komentarz został dodany.</p><p style="margin-bottom: 15px; margin-top: 2px;">Aby go zobaczyć kliknij OK.</p><p id="koment_dodany_link"><a id="koment_dodany_ok" href="news.php">OK</a></p></div>';
				}
			?>
			<div id="wakacje"><script type="text/javascript" src="js/wakacje.js"></script></div>
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
		<script src="http://app.sugester.pl/klasa-2c/widget.js" type="text/javascript"></script>
	</body>
</html>