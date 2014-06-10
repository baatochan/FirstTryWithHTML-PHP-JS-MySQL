<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Newsy | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet">
		<link href="arkusz_gora.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
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
				<li><a href="o_nas.php">O nas</a></li>
				<li class="active"><a href="news.php">Newsy</a></li>
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
		<div id="page" style="position: relative;">
			<h2 class="title">Co w trawie piszczy?</h2>
			<?php
				include("polacz.php");
				$query = mysql_query("select * from news order by data desc"); //where nazwa = 'xxx'  order by id = 'desc'
				while($rekord = mysql_fetch_array($query)){
				echo '<h2 style="font-size: 25px;" id="news'.$rekord[0].'">'.$rekord[1].'</h2><h3 style="font-size: 15px;">'.$rekord[2].'</h3><p>'.$rekord[3].'</p>';
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
				echo '<h3 style="font-size:15px;">Komentarze ('.$wiersze.'):</h3><p><a href="#news'.$rekord[0].'" id="p_k'.$rekord[0].'" style="font-weight: bold;">Pokaż komentarze</a></p><div id="komentarze'.$rekord[0].'" style="display: none;">';
				while($rekord1 = mysql_fetch_array($query1)){
				echo '<p style="margin-left: 15px;"><span style="font-weight: bold;">'.$rekord1[1].':</span> '.$rekord1[2].'</p>';
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
						<form method="post">
							<p><label for="autor'.$rekord[0].'" style="font-weight: bold;">Autor:</label>
							<input type="text" name="autor" id="autor'.$rekord[0].'"/></p>
							<p><label for="tresc'.$rekord[0].'" style="font-weight: bold;">Treść komentarza:</label></p>
							<textarea name="tresc" id="tresc'.$rekord[0].'" cols="50" rows="3"></textarea>
							<input type="hidden" name="koment" value="'.$rekord[0].'">
							<p style="text-align: right;"><input type="submit" value="Dodaj komentarz" /></p>
						</form></div>
				';
				}
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$query = mysql_query("INSERT INTO coments(autor, tresc, koment) values ('".$_POST['autor']."', '".$_POST['tresc']."', '".$_POST['koment']."')");
				echo '<div id="koment_dodany" style="background-color: white;  border: 5px #006 solid;  padding: 20px;  left: 50%;  width: 400px;  margin-left: -200px;  top: 25%;  position: fixed;  text-align: center;  color: black;"><p style="font-weight: bold; margin-bottom: 0px;">Twój komentarz został dodany.</p><p style="margin-bottom: 15px; margin-top: 2px;">Aby go zobaczyć kliknij OK.</p><p id="koment_dodany_link" style="background-color: #006;  color: white;  padding: 5px;  width: 100px;  border: none;  font-weight: bold; margin-left: auto; margin-right: auto;"><a id="koment_dodany_ok" href="news.php">OK</a></p></div>';
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