<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Co jutro w budzie?</title>
	</head>
	<body style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;	font-size: 13px;">
		<div>
			<?php
				include("polacz.php");
				$data = date("Ymd");//cala data (YYYYMMDD)
				$mies = date("m");//miesiac
				$tyg = date("N");//dzien tyg(1-7)
				$dzien = date("d");//dzien (1-31)
				$przest = date("L");//przestepny(0/1)
				$godz = date("H");//godzina
				$inny = $_GET['inny'];
				if ($mies == 1 OR $mies == 3 OR $mies == 5 OR $mies == 7 OR $mies == 8 OR $mies == 10){//31
					if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 7){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28 OR $dzien == 29 OR $dzien == 30) {$liczba123 = $data + 1;}
						elseif ($dzien == 31) {$liczba123 = $data + 70;}
					}
					elseif ($tyg == 5){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28) {$liczba123 = $data + 3;}
						elseif ($dzien == 29 OR $dzien == 30 OR $dzien == 31) {$liczba123 = $data + 72;}
					}
					elseif ($tyg == 6){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28 OR $dzien == 29) {$liczba123 = $data + 2;}
						elseif ($dzien == 30 OR $dzien == 31) {$liczba123 = $data + 71;}
					}
				}
				elseif ($mies == 4 OR $mies == 6 OR $mies == 9 OR $mies == 11){//30
					if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 7){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28 OR $dzien == 29) {$liczba123 = $data + 1;}
						elseif ($dzien == 30) {$liczba123 = $data + 71;}
					}
					elseif ($tyg == 5){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27) {$liczba123 = $data + 3;}
						elseif ($dzien == 28 OR $dzien == 29 OR $dzien == 30) {$liczba123 = $data + 73;}
					}
					elseif ($tyg == 6){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28) {$liczba123 = $data + 2;}
						elseif ($dzien == 29 OR $dzien == 30) {$liczba123 = $data + 72;}
					}
				}
				elseif ($mies == 2){
					if ($przest = 1){//29
						if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 7){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28) {$liczba123 = $data + 1;}
							elseif ($dzien == 29) {$liczba123 = $data + 72;}
						}
						elseif ($tyg == 5){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26) {$liczba123 = $data + 3;}
							elseif ($dzien == 27 OR $dzien == 28 OR $dzien == 29) {$liczba123 = $data + 74;}
						}
						elseif ($tyg == 6){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27) {$liczba123 = $data + 2;}
							elseif ($dzien == 28 OR $dzien == 29) {$liczba123 = $data + 73;}
						}
					}
					elseif ($przest = 0){//28
						if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 7){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27) {$liczba123 = $data + 1;}
							elseif ($dzien == 28) {$liczba123 = $data + 73;}
						}
						elseif ($tyg == 5){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25) {$liczba123 = $data + 3;}
							elseif ($dzien == 26 OR $dzien == 27 OR $dzien == 28) {$liczba123 = $data + 75;}
						}
						elseif ($tyg == 6){
							if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26) {$liczba123 = $data + 2;}
							elseif ($dzien == 27 OR $dzien == 28) {$liczba123 = $data + 74;}
						}
					}
				}
				elseif ($mies == 12){//zmiana roku
					if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 7){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28 OR $dzien == 29 OR $dzien == 30) {$liczba123 = $data + 1;}
						elseif ($dzien == 31) {$liczba123 = $data + 8870;}
					}
					elseif ($tyg == 5){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28) {$liczba123 = $data + 3;}
						elseif ($dzien == 29 OR $dzien == 30 OR $dzien == 31) {$liczba123 = $data + 8872;}
					}
					elseif ($tyg == 6){
						if ($dzien == 1 OR $dzien == 2 OR $dzien == 3 OR $dzien == 4 OR $dzien == 5 OR $dzien == 6 OR $dzien == 7 OR $dzien == 8 OR $dzien == 9 OR $dzien == 10 OR $dzien == 11 OR $dzien == 12 OR $dzien == 13 OR $dzien == 14 OR $dzien == 15 OR $dzien == 16 OR $dzien == 17 OR $dzien == 18 OR $dzien == 19 OR $dzien == 20 OR $dzien == 21 OR $dzien == 22 OR $dzien == 23 OR $dzien == 24 OR $dzien == 25 OR $dzien == 26 OR $dzien == 27 OR $dzien == 28 OR $dzien == 29) {$liczba123 = $data + 2;}
						elseif ($dzien == 30 OR $dzien == 31) {$liczba123 = $data + 8871;}
					}
				}
				if ($inny == NULL) {
					if ($tyg == 1 OR $tyg == 2 OR $tyg == 3 OR $tyg == 4 OR $tyg == 5) {
						if ($godz < 12) {
							echo '<div style="width: 50%; float: left; margin-bottom: 10px;"><p style="text-align: left; font-size: 11px; margin: 0;">Wybrany dzień: '.$data.'</p></div><div style="width: 50%; float: right; margin-bottom: 10px;"><p style="text-align: right; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php" style="color: black; text-decoration: none; font-style: italic;">Home</a> :: <a href="gfcdsxzffgjysd2_buda.php" style="color: black; text-decoration: none; font-style: italic;">Inny dzień</a></p></div><div style="clear: both;"></div>';
							$query = mysql_query("select * from kalendarz where sort=".$data." order by data");
							$wiersze = mysql_num_rows($query);
							$liczbaporz = 1;
							if ($wiersze == 0){
								echo '<p style="margin: 0;">Dzisiaj nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
							}
							elseif ($wiersze == 1){
								$rekord = mysql_fetch_array($query);
								echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
							}
							else {
								while($rekord = mysql_fetch_array($query)){
									echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
									$liczbaporz = $liczbaporz + 1;
								}
							}
						}
						else {
							echo '<div style="width: 50%; float: left; margin-bottom: 10px;"><p style="text-align: left; font-size: 11px; margin: 0;">Wybrany dzień: '.$liczba123.'</p></div><div style="width: 50%; float: right; margin-bottom: 10px;"><p style="text-align: right; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php" style="color: black; text-decoration: none; font-style: italic;">Home</a> :: <a href="gfcdsxzffgjysd2_buda.php" style="color: black; text-decoration: none; font-style: italic;">Inny dzień</a></p></div><div style="clear: both;"></div>';
							$query = mysql_query("select * from kalendarz where sort=".$liczba123." order by data");
							$wiersze = mysql_num_rows($query);
							$liczbaporz = 1;
							if ($wiersze == 0){
								echo '<p style="margin: 0;">Jutro nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
							}
							elseif ($wiersze == 1){
								$rekord = mysql_fetch_array($query);
								echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
							}
							else {
								while($rekord = mysql_fetch_array($query)){
									echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
									$liczbaporz = $liczbaporz + 1;
								}
							}
						}
					}
					else {
						echo '<div style="width: 50%; float: left; margin-bottom: 10px;"><p style="text-align: left; font-size: 11px; margin: 0;">Wybrany dzień: '.$liczba123.'</p></div><div style="width: 50%; float: right; margin-bottom: 10px;"><p style="text-align: right; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php" style="color: black; text-decoration: none; font-style: italic;">Home</a> :: <a href="gfcdsxzffgjysd2_buda.php" style="color: black; text-decoration: none; font-style: italic;">Inny dzień</a></p></div><div style="clear: both;"></div>';
						$query = mysql_query("select * from kalendarz where sort=".$liczba123." order by data");
						$wiersze = mysql_num_rows($query);
						$liczbaporz = 1;
						if ($wiersze == 0){
							echo '<p style="margin: 0;">Jutro nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
						}
						elseif ($wiersze == 1){
							$rekord = mysql_fetch_array($query);
							echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
						}
						else {
							while($rekord = mysql_fetch_array($query)){
								echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
								$liczbaporz = $liczbaporz + 1;
							}
						}
					}
				}
				else {
					echo '<div style="width: 50%; float: left; margin-bottom: 10px;"><p style="text-align: left; font-size: 11px; margin: 0;">Wybrany dzień: '.$inny.'</p></div><div style="width: 50%; float: right; margin-bottom: 10px;"><p style="text-align: right; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php" style="color: black; text-decoration: none; font-style: italic;">Home</a> :: <a href="gfcdsxzffgjysd2_buda.php?inny='.$inny.'" style="color: black; text-decoration: none; font-style: italic;">Inny dzień</a></p></div><div style="clear: both;"></div>';
					$query = mysql_query("select * from kalendarz where sort=".$inny." order by data");
					$wiersze = mysql_num_rows($query);
					$liczbaporz = 1;
					if ($wiersze == 0){
						echo '<p style="margin: 0;">W tym dniu nie ma żadnych zapowiedzianych kartkówek, ani sprawdzianów. HURRA!!</p>';
					}
					elseif ($wiersze == 1){
						$rekord = mysql_fetch_array($query);
						echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
					}
					else {
						while($rekord = mysql_fetch_array($query)){
							echo '<p style="margin: 0;"><span style="font-weight:bold;">'.$liczbaporz.'.</span> '.$rekord[3].'</p>';
							$liczbaporz = $liczbaporz + 1;
						}
					}
				}
			?>
		</div>
	</body>
</html>