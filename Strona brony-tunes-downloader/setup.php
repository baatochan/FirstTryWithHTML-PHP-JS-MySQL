<!DOCTYPE HTML>
<html>
	<head>
		<title>Please wait</title>
		<link href="favicon.png" rel="shortcut icon" type="image/png">
		<?php
			$amount = $_GET['amount'];
			$interval = $_GET['interval'];
			$range1 = $_GET['range1'];
			$range2 = $_GET['range2'];
			$x = $range2 - $range1;
			$x += 1;
			$y = $x / $amount;
			if ($x % $amount == 0) {
				$z = $y;
			}
			else {
				$z = $y;
				$z = floor($z);
				$z += 1;
			}
			$link = "download.php?amount=$amount&interval=$interval&range1=$range1&range2=$range2&refresh=0&steps=$z";
			echo '<meta http-equiv="refresh" content="1; url='.$link.'">';
		?>
	</head>
	<body>
		<h1 style="text-align:center;"><a href="index.html" style="color:blue; text-align:center;">BronyTunes Downloader</a></h1>
		<?php
			echo '<p style="text-align:center;">Please wait, if you arent redirected, click <a href="'.$link.'">here</a></p>';
		?>
		<footer style="font-style:italic; text-align:right;">Made by: <a href="https://google.com/+BartoszRodziewicz">Bart Rodziewicz AKA bartoszka1996</a></footer>
	</body>
</html>