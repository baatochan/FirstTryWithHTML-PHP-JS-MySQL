<?php
$title = "Dodawanie wpisu zako�czone. ;)";
include('head.php'); 
include('body.php');
include('menu2.php');
echo '<td style="height: 573px; width: 745px; vertical-align: top; text-align: center;">';

if (isset($_POST['wyk'])) {
		$wyk = $_POST['wyk'];
		$nazwa = $_POST['nazwa'];
		$link = $_POST['link']; 
		$baza = mysql_connect('mysql.cba.pl', 'klasa_ic', 'baza');
		if ($baza === false) die('Nie mo�na po��czy� si� z baz� danych!');
		mysql_query('SET NAMES "utf8"');
		$zapytanie = "INSERT INTO uzytkownicy (wyk,nazwa,link) VALUES ('$wyk','$nazwa','$link')";
		$odp = mysql_query($zapytanie);
		if ($odp === false) die('Nie mo�na by�o doda� wpisu do bazy danych!');
		else echo 'Gratulacje, Tw�j wpis zosta� dodany. Aby wr�ci� do tabeli kliknij <a href="muza.php">tutaj</a> lub dodaj nast�pny wpis.';
		mysql_close($baza); } 
?>
<form name="dodawanie" method="POST">
<fieldset>
<legend>Piosenka</legend>
<label for="wyk">Wykonawca:</label><br>
<input name="wyk" id="wyk" maxlength="50" /><br>
<label for="nazwa">Tytu�:</label><br>
<input name="nazwa" id="nazwa" maxlength="100" /><br>
<label for="link">Link:</label><br>
<input name="link" id="link" maxlength="250" value="http://" /><br>&nbsp;<br>
<input type="submit" value="Dodaj" /><br>
<?php
echo '</td>';
include('menu3.php');
include('koniec.php');
?>