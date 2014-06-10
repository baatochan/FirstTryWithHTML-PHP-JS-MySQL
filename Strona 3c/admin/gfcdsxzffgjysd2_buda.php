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
			$inny = $_GET['inny'];
			$data = date("Ymd");
			if ($inny == NULL) {
				$inny = $data;
			}
			$wczoraj = $data - 1;
			$dzisiaj = $data;
			$jutro = $data + 1;
			$pojutrze = $data + 2;
			echo '<div style="float: left; margin-bottom: 15px;"><p style="text-align: left; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php?inny='.$wczoraj.'" style="color: black; text-decoration: none; font-style: italic;">Wczoraj</a> :: <a href="fgjysdgfcdsxzf_buda.php?inny='.$dzisiaj.'" style="color: black; text-decoration: none; font-style: italic;">Dzisiaj</a> :: <a href="fgjysdgfcdsxzf_buda.php?inny='.$jutro.'" style="color: black; text-decoration: none; font-style: italic;">Jutro</a> :: <a href="fgjysdgfcdsxzf_buda.php?inny='.$pojutrze.'" style="color: black; text-decoration: none; font-style: italic;">Pojutrze</a></p></div><div style="float: right; margin-bottom: 15px;"><p style="text-align: right; font-size: 11px; margin: 0;"><a href="fgjysdgfcdsxzf_buda.php" style="color: black; text-decoration: none; font-style: italic;">Home</a> :: <a href="gfcdsxzffgjysd2_buda.php" style="color: black; text-decoration: none; font-style: italic;">Inny dzień</a></p></div>';
			echo '<div style="text-align: center;"><form action="fgjysdgfcdsxzf_buda.php" method="GET"><label for="inny">Dzień:</label><input type="text" id="inny" name="inny" maxlength="8" value="'.$inny.'"><input type="submit" value="Go!"></form></div>';
			?>
			
		</div>
	</body>
</html>