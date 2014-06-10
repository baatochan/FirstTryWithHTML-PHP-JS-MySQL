<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html lang="pl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="creation-date" content="Wed, 01 Sep 2010 00:00:00 GMT">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="klasa, klasa 2c, klasa iic, klasa 1c, klasowa, nasza klasa, nasza, iic, ic, gimnazjum w kamiencu wroclawskim, gimnazjum, gim2kam, nk, forum, forum klasy, forum klasowe, klasowe, do pobrania, downloads, 2c, 1c, forum iic, forum ic, forum 1c, forum 2c">
		<meta name="description" content="Jest to strona internetowa klasy 2c. Znajduje się tutaj nasz plan lekcji, informacje z życia naszej klasy, nasza galeria zdjęć z wszystkich wspólnych wycieczek, forum klasowe, rozpiska dzwonków w naszej budzie, piosenki godne polecenia, rozkład jazdy autobusu szkolnego oraz mapy naszej gminy i poszczególnych wiosek.">
		<title>Forum | Strona klasy 2c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
	</head>
	<?php
		$access = $_GET['access'];
		$spr = u46584trhn847yr8;
		if($access == $spr) {
			echo '<frameset><frame src="http://www.forum-klasa-49cde66d2b50a.pun.pl/" name="forum"></frameset>';
		}
		else {
			echo '<body><p style="text-align: center; font-size: 14px; color: red;">Przepraszamy. Coś poszło nie tak. Prosimy spróbować ponownie. Aby powrócić do strony głównej kliknij <a href="index.php">tutaj</a>.</p></body>';
		}
	?>
</html>
