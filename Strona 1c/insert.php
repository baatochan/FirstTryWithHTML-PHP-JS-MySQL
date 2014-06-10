<?php
   //Odbieranie danych metodą post
   $wyk = htmlspecialchars(trim($_POST['wyk']));
   $nazwa = htmlspecialchars(trim($_POST['nazwa']));
   $link = htmlspecialchars(trim($_POST['link']));

   //Konfiguracja połączenia z baza mysql
   $baza_host=("mysql.cba.pl"); // Przeważnie localhost
   $baza_login=("klasa_ic"); // Login do bazy
   $baza_haslo=("baza"); // Hasło do bazy
   $baza_nazwa=("klasa_ic_cba_pl"); // Nazwa bazy

   //Łączenie się z bazą mysql
   $polaczenie = mysql_connect($baza_host, $baza_login, $baza_haslo);
   $db = mysql_select_db($baza_nazwa);

   //Dodawanie rekordów do bazy mysql
   $dodaj  = "INSERT INTO Muzyka (wyk,nazwa,link) VALUES ('$wyk','$nazwa','$link')";
   mysql_query($dodaj) or die(mysql_error());
   mysql_close($polaczenie);
?>