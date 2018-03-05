<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="bartoszka1996">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<title>xxx</title>
		<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
	</head>
	<!--<body style="color: white; text-align: center; background: black; padding: 5px;">--><body>
	<style>
		#page {
			min-width: 1024px;
		}
		h1 {text-align: center; font-size: 24px;}
	</style>
		<div id="page" class="index">
			<h1>Lista słów</h1>
			<?php
			$is = 10;
			/*$rekord = array();
			for ($i = 0; $i < $is; $i++) {
				$rekord[$i] = array($i, 'xxx', 'yyy', 'zzza aabbbcccd ddeeefffg gghhhi iijjjk kklllmm mnnn ooopppq qq rrrss stt tuuuvvvw wwxxx yyyzzz');
			}*/
			//$con = mysqli_connect("localhost:3306","root","password","test");
			$con = mysqli_connect("mysql.cba.pl","bartoszka1996","bartek22","bartoszka1996_cba_pl");
			$result = mysqli_query($con,"select id, s_a, s_p, def from slowa order by rand() limit $is;");
			while($row = mysqli_fetch_array($result)){
				echo '
					<div id="div_'.$row[0].'" class="div_slowo">
						<table id="table_'.$row[0].'" class="table_slowo">
							<tbody>
								<tr id="tr_slowo_'.$row[0].'" class="tr_slowo">
									<td id="td_slowo_ang_'.$row[0].'" class="td_slowo_ang">'.$row[1].'</td>
									<td id="td_slowo_pol_'.$row[0].'" class="td_slowo_pol"><p id="p_pol_'.$row[0].'" class="p_pol">'.$row[2].'</p></td>
									<td id="td_pokaz_'.$row[0].'" class="td_pokaz"><p id="p_pokaz_'.$row[0].'" class="p_pokaz"><span id="span_pokazsl_'.$row[0].'" class="span_pokazsl">Słowo</span> <span id="span_pokazdef_'.$row[0].'" class="span_pokazdef">Definicja</span></p></td>
								</tr>
								<tr id="tr_def_'.$row[0].'" class="tr_def">
									<td colspan="3" id="td_def_'.$row[0].'" class="td_def"><p id="p_def_'.$row[0].'" class="p_def">'.$row[3].'</p></td>
								</tr>
							</tbody>
						</table>
						<script type="text/javascript">$("#span_pokazsl_'.$row[0].'").click(function() {$("#p_pol_'.$row[0].'").show(0);});$("#span_pokazdef_'.$row[0].'").click(function() {$("#p_def_'.$row[0].'").show(0);});</script>
					</div>
				';
			}
			//for ($j = 0; $j < $is; $j++){
			//	echo '<p>'.$rekord[$j][0].': '.$rekord[$j][1].' '.$rekord[$j][2].'</p><p style="margin-bottom:20px;">'.$rekord[$j][3].'</p>';
			//}
			?>
			<style>
			table, td, tr, thead, tbody, tfoot {
				border: 1px solid black;
			}
			p {
				margin:0;
			}
			.div_slowo p {
				margin:0;
				padding:0;
			}
			
			.td_slowo_ang {
				min-width: 212px;
			}
			
			.td_slowo_pol {
				height: 40px;
				min-width: 212px;
			}
			.td_def {
				height: 40px;
			}
			.p_pol, .p_def {
				display:none;
			}
			td {
				padding: 0 5px;
			}
			.table_slowo {
				margin-bottom: 20px;
				margin-left: auto;
				margin-right: auto;
				min-width: 600px;
				font-size: 24px;
				text-align: center;
			}
			.td_pokaz {
				width:160px;
			}
			</style>
			
			<!--<p>test</p>-->
		</div>
		<footer style="font-size: 14px; text-align: right;">
			<p style="font-style: italic;">~~Designed by <a href="https://plus.google.com/113232252744106953426?rel=author" style="/*color: white;*/">bartoszka1996</a></p>
		</footer>
</body>
</html>
