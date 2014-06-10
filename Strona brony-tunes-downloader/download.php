<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link href="favicon.png" rel="shortcut icon" type="image/png">
		<title>Download in progress</title>
		<?php
			$amount = $_GET['amount'];
			$interval = $_GET['interval'];
			$range1 = $_GET['range1'];
			$range2 = $_GET['range2'];
			$refresh = $_GET['refresh'];
			$steps = $_GET['steps'];
			if ($refresh+1>=$steps) {
				echo '<meta http-equiv="refresh" content="1; url=done.html?xxx=range2">';
			}
			else {
				$zzz = $refresh + 1;
				echo '<meta http-equiv="refresh" content="'.$interval.'; url=download.php?amount='.$amount.'&interval='.$interval.'&range1='.$range1.'&range2='.$range2.'&refresh='.$zzz.'&steps='.$steps.'">';//przekierowaie na download.php?amount=$amount&interval=$interval&range1=$range1&range2=$range2&refresh=$zzz&steps=$steps po odpowiednim intervalu
			}
			$done = $refresh * $amount;
			$done += $range1;
		?>
	</head>
	<body>
		<h1 style="text-align:center;"><a href="index.html" style="color:blue; text-align:center;">BronyTunes Downloader</a></h1>
		<?php
			if ($refresh<$steps) {
				for ($i = 0; $i < $amount; $i++) {
					$yyy = $done + $i;
					if ($yyy <= $range2) {
						echo "<p>Piosenka nr $yyy</p>";
						echo '
							<script type="text/javascript">
								window.open("http://www.bronytunes.com/retrieve_song.php?song_id='.$yyy.'&client_type=web");
							</script>
						';
					}
				}
			}
		?>
		<footer style="font-style:italic; text-align:right;">Made by: <a href="https://google.com/+BartoszRodziewicz">Bart Rodziewicz AKA bartoszka1996</a></footer>
	</body>
</html>