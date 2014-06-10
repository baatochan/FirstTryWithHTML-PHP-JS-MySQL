<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Kontakt | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
		<link href="arkusz_podstawowy.css" rel="stylesheet">
		<link href="arkusz_gora.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/panel.js" type="text/javascript"></script>
		<script src="js/google_analitycs.js" type="text/javascript"></script>
		<script src="js/onas.js" type="text/javascript"></script>
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
				<li class="active"><a href="kontakt.php">Kontakt</a></li>
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
		<div id="page" class="contact">
			<h2 class="title">Kontakt</h2>
				<?php
					$pass = dezorganizacja;
					$exit = u46594trhn847yr8;//kod wylogowujacy
					if($_POST){//uruchomione jesli wyslany formularz
						$haslo = $_POST['pass'];//podane haslo
						if($haslo == $pass){//sprawdzenie hasla
							echo '<style>#plog{display:none;}</style>';//ukrycie linku zalogowujacego
							echo '<div style="text-align: right; margin-bottom: 10px;"><form id="panel_wylog" name="panel_wylog" method="POST"><input type="hidden" name="pass" value="u46594trhn847yr8"><input type="submit" value="Wyloguj"></form></div>';//pokazanie buttomu wylogowujacego
							echo '<div>
								<img alt="Szkoła" src="images/szkola.png" class="contact_icon">
								<h3>Szkoła</h3>
								<div style="clear: both"></div>
								<!--Miejsce na żądanie do bazy danych-->
								<div class="contact_left">
									<p class="imienaz">Publiczne Gimnazjum nr 2</p>
									<p>ul. Kolejowa 4</p>
									<p>55-002 Kamieniec Wrocławski</p>
									<p>tel. 713185052</p>
									<p><a href="http://gim2kam.edupage.org" style="text-decoration: none;">http://gim2kam.edupage.org</a></p>
									<p>kamieniec.gimnazjum2@neostrada.pl</p>
								</div>
								<div class="contact_right">
									<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14&amp;output=embed"><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14"><img alt="Mapa dojazdu" src="images/mapa_szkola.png" id="mapa"></a></iframe>
									<p><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14" style="text-align:left">Wyświetl większą mapę</a></p>
								</div>
								<div style="clear: both"></div>
							</div>';
							echo '<div>
							<img alt="Wychowawca" src="images/wychowawca.png" class="contact_icon">
							<h3>Wychowawca</h3>
							<div style="clear: both"></div>';
							include('polacz.php');
							$id = 26;
							$query = mysql_query("select imie, nazwisko, inne, komorka, mail, gg from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p style="text-decoration: underline;">'.$rekord[2].'</p>
								<p>tel. '.$rekord[3].'</p>
								<p>'.$rekord[4].'</p>
								<p>GG: '.$rekord[5].'</p>
							</div>
							<div class="contact_right">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Samorząd klasowy" src="images/samorzad.png" class="contact_icon">
								<h3>Samorząd klasowy</h3>
								<div style="clear: both"></div>
								<h4>Przewodniczący klasy</h4>';
							$id = 7;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
							echo '<h4>Zastępca przewodniczącego</h4>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
							echo '<h4>Skarbnik klasowy</h4>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Administratorzy" src="images/admini.png" class="contact_icon">
								<h3>Administratorzy strony</h3>
								<div style="clear: both"></div>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left" style="margin-top: 42px;">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p></a>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right" style="margin-top: 42px;">
								<a href="profil.php?id='.$id.'&amp;access=u46574trhn843yr8"><img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj"></a>
							</div><div style="clear: both"></div>';
						}
						elseif($haslo == $exit){
							echo '<p class="wylogowano">Wylogowano. Zaloguj się ponownie klikając link na dole strony.</p>';//info o wylogowaniu
							echo '<div>
								<img alt="Szkoła" src="images/szkola.png" class="contact_icon">
								<h3>Szkoła</h3>
								<div style="clear: both"></div>
								<!--Miejsce na żądanie do bazy danych-->
								<div class="contact_left">
									<p class="imienaz">Publiczne Gimnazjum nr 2</p>
									<p>ul. Kolejowa 4</p>
									<p>55-002 Kamieniec Wrocławski</p>
									<p>tel. 713185052</p>
									<p><a href="http://gim2kam.edupage.org" style="text-decoration: none;">http://gim2kam.edupage.org</a></p>
									<p>kamieniec.gimnazjum2@neostrada.pl</p>
								</div>
								<div class="contact_right">
									<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14&amp;output=embed"><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14"><img alt="Mapa dojazdu" src="images/mapa_szkola.png" id="mapa"></a></iframe>
									<p><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14" style="text-align:left">Wyświetl większą mapę</a></p>
								</div>
								<div style="clear: both"></div>
							</div>';
							echo '<div>
							<img alt="Wychowawca" src="images/wychowawca.png" class="contact_icon">
							<h3>Wychowawca</h3>
							<div style="clear: both"></div>';
							include('polacz.php');
							$id = 26;
							$query = mysql_query("select imie, nazwisko, inne, komorka, mail, gg from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p>'.$rekord[2].'</p>
								<p>tel. '.$rekord[3].'</p>
								<p>'.$rekord[4].'</p>
								<p>GG: '.$rekord[5].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Samorząd klasowy" src="images/samorzad.png" class="contact_icon">
								<h3>Samorząd klasowy</h3>
								<div style="clear: both"></div>
								<h4>Przewodniczący klasy</h4>';
							$id = 7;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Zastępca przewodniczącego</h4>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Skarbnik klasowy</h4>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Fotograf klasowy</h4>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Administratorzy" src="images/admini.png" class="contact_icon">
								<h3>Administratorzy strony</h3>
								<div style="clear: both"></div>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left" style="margin-top: 42px;">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right" style="margin-top: 42px;">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';}
						else {
							echo '<p class="zlehaslo">Podałeś złe hasło! Spróbuj jeszcze raz klikając w link na dole strony.</p>';
							echo '<div>
								<img alt="Szkoła" src="images/szkola.png" class="contact_icon">
								<h3>Szkoła</h3>
								<div style="clear: both"></div>
								<!--Miejsce na żądanie do bazy danych-->
								<div class="contact_left">
									<p class="imienaz">Publiczne Gimnazjum nr 2</p>
									<p>ul. Kolejowa 4</p>
									<p>55-002 Kamieniec Wrocławski</p>
									<p>tel. 713185052</p>
									<p><a href="http://gim2kam.edupage.org" style="text-decoration: none;">http://gim2kam.edupage.org</a></p>
									<p>kamieniec.gimnazjum2@neostrada.pl</p>
								</div>
								<div class="contact_right">
									<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14&amp;output=embed"><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14"><img alt="Mapa dojazdu" src="images/mapa_szkola.png" id="mapa"></a></iframe>
									<p><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14" style="text-align:left">Wyświetl większą mapę</a></p>
								</div>
								<div style="clear: both"></div>
							</div>';
							echo '<div>
							<img alt="Wychowawca" src="images/wychowawca.png" class="contact_icon">
							<h3>Wychowawca</h3>
							<div style="clear: both"></div>';
							include('polacz.php');
							$id = 26;
							$query = mysql_query("select imie, nazwisko, inne, komorka, mail, gg from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p>'.$rekord[2].'</p>
								<p>tel. '.$rekord[3].'</p>
								<p>'.$rekord[4].'</p>
								<p>GG: '.$rekord[5].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Samorząd klasowy" src="images/samorzad.png" class="contact_icon">
								<h3>Samorząd klasowy</h3>
								<div style="clear: both"></div>
								<h4>Przewodniczący klasy</h4>';
							$id = 7;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Zastępca przewodniczącego</h4>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Skarbnik klasowy</h4>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '<h4>Fotograf klasowy</h4>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							echo '</div>
							<div>
								<img alt="Administratorzy" src="images/admini.png" class="contact_icon">
								<h3>Administratorzy strony</h3>
								<div style="clear: both"></div>';
							$id = 15;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';
							$id = 10;
							$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
							$rekord = mysql_fetch_array($query);
							echo '<div class="contact_left" style="margin-top: 42px;">
								<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
								<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
								<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
								<p '.$rekord[7].'>'.$rekord[6].'</p>
								<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
							</div>
							<div class="contact_right" style="margin-top: 42px;">
								<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
							</div><div style="clear: both"></div>';}
					}
					else {
						echo '<div>
								<img alt="Szkoła" src="images/szkola.png" class="contact_icon">
								<h3>Szkoła</h3>
								<div style="clear: both"></div>
								<!--Miejsce na żądanie do bazy danych-->
								<div class="contact_left">
									<p class="imienaz">Publiczne Gimnazjum nr 2</p>
									<p>ul. Kolejowa 4</p>
									<p>55-002 Kamieniec Wrocławski</p>
									<p>tel. 713185052</p>
									<p><a href="http://gim2kam.edupage.org" style="text-decoration: none;">http://gim2kam.edupage.org</a></p>
									<p>kamieniec.gimnazjum2@neostrada.pl</p>
								</div>
								<div class="contact_right">
									<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14&amp;output=embed"><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14"><img alt="Mapa dojazdu" src="images/mapa_szkola.png" id="mapa"></a></iframe>
									<p><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=51.07751N,+17.1741E&amp;aq=&amp;sll=51.075138,17.180429&amp;sspn=0.018821,0.052314&amp;vpsrc=6&amp;ie=UTF8&amp;ll=51.075138,17.180429&amp;spn=0.01882,0.052314&amp;z=14" style="text-align:left">Wyświetl większą mapę</a></p>
								</div>
								<div style="clear: both"></div>
							</div>';
						echo '<div>
						<img alt="Wychowawca" src="images/wychowawca.png" class="contact_icon">
						<h3>Wychowawca</h3>
						<div style="clear: both"></div>';
						include('polacz.php');
						$id = 26;
						$query = mysql_query("select imie, nazwisko, inne, komorka, mail, gg from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p>'.$rekord[2].'</p>
							<p>tel. '.$rekord[3].'</p>
							<p>'.$rekord[4].'</p>
							<p>GG: '.$rekord[5].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						echo '</div>
						<div>
							<img alt="Samorząd klasowy" src="images/samorzad.png" class="contact_icon">
							<h3>Samorząd klasowy</h3>
							<div style="clear: both"></div>
							<h4>Przewodniczący klasy</h4>';
						$id = 7;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						echo '<h4>Zastępca przewodniczącego</h4>';
						$id = 10;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						echo '<h4>Skarbnik klasowy</h4>';
						$id = 15;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						echo '<h4>Fotograf klasowy</h4>';
						$id = 15;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						echo '</div>
						<div>
							<img alt="Administratorzy" src="images/admini.png" class="contact_icon">
							<h3>Administratorzy strony</h3>
							<div style="clear: both"></div>';
						$id = 15;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';
						$id = 10;
						$query = mysql_query("select imie, nazwisko, miejscowosc, mi_d, komorka, ko_d, mail, ma_d, gg, gg_d from uczniowie where id='".$id."'");
						$rekord = mysql_fetch_array($query);
						echo '<div class="contact_left" style="margin-top: 42px;">
							<p class="imienaz">'.$rekord[0].' '.$rekord[1].'</p>
							<p class="msc"'.$rekord[3].'>'.$rekord[2].'</p>
							<p '.$rekord[5].'>tel. '.$rekord[4].'</p>
							<p '.$rekord[7].'>'.$rekord[6].'</p>
							<p '.$rekord[9].'>GG: '.$rekord[8].'</p>
						</div>
						<div class="contact_right" style="margin-top: 42px;">
							<img alt="'.$rekord[0].' '.$rekord[1].'" src="images/'.$rekord[1].'.png" class="contact_zdj">
						</div><div style="clear: both"></div>';}
				?>
			<p id="plog" style="text-decoration: none; font-size: 15px;">Jeśli jesteś uczniem naszej klasy <a href="#" class="alog" style="text-decoration: underline;">zaloguj się</a>.</p>
			<div id="divlog"></div><div id="div2log"><p style="text-align: right; font-size: 8px; margin: 0;"><a href="#" class="alog">Zamknij</a></p><form id="panel_login" name="panel_login" method="POST"><p style="margin: 2px; line-height: 130%; font-size: 16px; font-weight: bold;"><label for="pass">Wpisz hasło:</label></p><p style="margin: 0px; line-height: 130%; padding: 10px;"><input type="password" id="pass" name="pass" maxlength="15" tabindex="1"><input type="submit" value="Zaloguj" tabindex="2"></p></form></div>
			</div>
			<p id="contact_alert"><a href="o_nas.php">Informacje kontaktowe do uczniów naszej klasy znajdują się w zakładce O nas.</a></p>
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