<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html lang="pl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="author" content="bartoszka1996 & sugam1996">
		<meta name="keywords" content="strona klasowa, forum klasowe, gim2kam, kamieniec, wrocław, szkoła">
		<meta name="description" content="Strona i forum klasy 3c z Gimnazjum w Kamieńcu Wrocławskim.">
		<title>Forum | Strona klasy 3c</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/ico">
	</head>
	<?php
		$access = $_GET['access'];
		$spr = u46584trhn847yr8;
		if($access == $spr) {
			echo '<frameset><frame src="http://www.forum-klasa-49cde66d2b50a.pun.pl/" name="forum"></frameset>';
		}
		else {
			echo '<body><p style="text-align: center; font-size: 14px; color: red;">Przepraszamy. Coś poszło nie tak. Prosimy spróbować ponownie. Aby powrócić do strony głównej kliknij <a href="index.html">tutaj</a>.</p></body>';
		}
	?>
</html>
