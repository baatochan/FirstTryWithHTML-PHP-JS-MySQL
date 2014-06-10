<?php
$title = "Filmiki - inne - strona klasy Ic";
include('head.php'); 
include('body.php');
include('menu2.php');
?>
<td style="height: 650px; width: 745px; vertical-align: top; text-align: center;">
<?php
function lacz_bd()
{  
$db = new mysqli('mysql.cba.pl', 'klasa_ic', 'baza', 'klasa_ic_cba_pl');  
	if (! $db)
		return false;
	$db->autocommit(TRUE);
	return $db;
}
//po³aczenie z baz¹
$db = lacz_bd();
//zapytanie sql do bazy okreœlaj¹ce jakie dane maj¹ zostaæ pobrane
$zapytanie = "select id, nazwa, link from Wideo";
//pobranie wyniku zapytania
$wynik = $db->query($zapytanie);
//obliczanie iloœci rekordów
$ile_znalezionych = $wynik->num_rows;
//rozpoczynamy budowanie tabeli dla naszych danych
echo '<table border="1">';
echo '<thead>';
echo '<tr><th>Lp</th><th>Nazwa filmiku</th><th>Link do filmu na youtube.com</th></tr>';
echo '</thead>';
echo '<tbody>';
//pêtla po rekordach z bazy 
for ($i=0; $i <$ile_znalezionych; $i++)
	{
		$wiersz = $wynik->fetch_assoc();
		echo '<tr>';
		echo '<td>'.$wiersz['id'].'</td>';
		echo '<td>'.$wiersz['nazwa'].'</td>';
		echo '<td><a href="'.$wiersz['link'].'">Odtw&#243;rz</a></td>';
		echo '</tr>';
	}
echo '</tbody>';
echo '</table>';
?>
</td>
<?php 
include('menu3.php'); 
include('koniec.php');
?>