<html lang="pl">
<head>
    <meta charset="UTF-8" />
	<title>Dodawanie newsów</title>
	
	<style type="text/css">
		form {
			margin 0px;
		}
		
		div {
			margin: 0px auto 0px auto;
			width: 670px;
		}
		
		#wyslij {
			text-align: right;
		}
	</style>
</head>
<body>
	<div>
		<form method="post">
			<p><label for="nazwa">Tytuł: </label><input type="text" name="nazwa" /></p>
			<p><label for="data">Data: </label><input type="date" name="data" value="2010-09-01"/></p>
			<p><label for="tresc">Treść newsa: </label></p>
			<textarea name="tresc" cols="80" rows="5"></textarea>
			<p id="wyslij"><input type="submit" value="Dodaj newsa" /></p>
		</form>
	</div>
	<?php
		include("polacz.php");
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$query = mysql_query("INSERT INTO news(nazwa, data, tresc) values ('".$_POST['nazwa']."', '".$_POST['data']."', '".$_POST['tresc']."')");
		echo 'News dodany!';
		}
	?>
</body>
</html>