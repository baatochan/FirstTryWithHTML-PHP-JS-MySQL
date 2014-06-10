<!DOCTYPE HTML>
<html>
	<head>
		<title>Please wait</title>
		<?php
			$yyy = $_GET['number'];
		?>
		<link href="favicon.png" rel="shortcut icon" type="image/png">
	</head>
	<body>
		<h1 style="text-align:center;"><a href="index.html" style="color:blue; text-align:center;">BronyTunes Downloader</a></h1>
		<?php
			echo '<p style="text-align:center;">To download, click <a href="http://www.bronytunes.com/retrieve_song.php?song_id='.$yyy.'&client_type=web">here</a></p>';
		?>
		<footer style="font-style:italic; text-align:right;">Made by: <a href="https://google.com/+BartoszRodziewicz">Bart Rodziewicz AKA bartoszka1996</a></footer>
	</body>
</html>