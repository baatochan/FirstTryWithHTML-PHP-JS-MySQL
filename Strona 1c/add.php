<?php
$title = "Dodawanie wpisu - muzyka - inne - strona klasy Ic";
include('head.php'); 
include('body.php');
include('menu2.php');
?>
<td>
<script type"text/javascript">
$(document).ready(function(){
   $("form#submit").submit(function() {
      var wyk = $('#wyk').attr('value');
      var nazwa = $('#nazwa').attr('value');
	  var link = $('#link').attr('value');
      $.ajax({
         type: "POST",
         url: "insert.php",
         data: "wyk="+ wyk + "&nazwa=" + nazwa + "&link=" + link,
      });
	return false;
	});
});
</script>
<form id="submit" method="post" name="submit" action="">
			<fieldset>
				<legend style="font-weight: bold; font-size: 16px;">Piosenka</legend>

				<label for="wyk">Wykonawca:</label>
				<br>
				<input type="text" name="wyk" id="wyk" class="text" size="20" />
				<br>
				<label for="nazwa">Tytul:</label>
				<br>
				<input type="text" name="nazwa" id="nazwa" class="text" size="20" />
				<br>
				<label for="nazwa">Link:</label>
				<br>
				<input type="text" name="link" id="link" class="text" size="20" />
				<br>
				<br>
				
				<input type="submit" value="Dodaj" /><br>
			</fieldset>
</form>
<p><b><img class="tick" src="tick.png"> Piosenka została dodana do bazy.</b></p>
</td>
<?php
require_once("menu3.php");
require_once("koniec.php");
?>