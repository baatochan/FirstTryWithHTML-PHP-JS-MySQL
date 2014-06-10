<body style="background-color: rgb(211, 229, 250);">
<center>
<table style="text-align: left; background-color: rgb(211, 229, 250); width: 965px;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<th style="height: 170px; width: 745px;"><a href="index2.php"><img style="border: 0px solid ; width: 675px; height: 201px;" alt="" src="logo.png"></a></th>
<td style="height: 170px; width: 200px;">
<script language="javascript">
var timerID = null; 
var timerRunning = false; 
function stopclock() 
{ 
if(timerRunning) 
clearTimeout(timerID) 
timerRunning = false; 
} 

function startclock() 
{ 
stopclock(); 
showtime(); 
} 

function showtime() 
{ 
var now = new Date(); 
var hours = now.getHours(); 
var minutes = now.getMinutes(); 
var seconds = now.getSeconds(); 
var timeValue = "" + ((hours> 24) ? hours - 24 : hours); 
timeValue += ((minutes < 10) ? ":0" : ":") + minutes; 
timeValue += ((seconds < 10) ? ":0" : ":") + seconds; 
document.clock.face.value = timeValue; 
timerID = setTimeout("showtime()",1000);
timerRunning = true; 
}
</script>
<form name="clock" onsubmit="0">
<input name="face" size="24" type="text">
</form>
<script>startclock();</script>
<script language="JavaScript">
DayName = new Array(7)
DayName[0] = "niedziela "
DayName[1] = "poniedzia&#322;ek "
DayName[2] = "wtorek "
DayName[3] = "&#347;roda "
DayName[4] = "czwartek "
DayName[5] = "pi&#261;tek "
DayName[6] = "sobota "

MonthName = new Array(12)
MonthName[0] = "stycznia "
MonthName[1] = "lutego "
MonthName[2] = "marca "
MonthName[3] = "kwietnia "
MonthName[4] = "maja "
MonthName[5] = "czerwca "
MonthName[6] = "lipca "
MonthName[7] = "sierpnia "
MonthName[8] = "wrze&#347;nia "
MonthName[9] = "pa&#378;dziernika "
MonthName[10] = "listopada "
MonthName[11] = "grudnia "

function getDateStr(){
    var Today = new Date()
    var WeekDay = Today.getDay()
    var Month = Today.getMonth()
    var Day = Today.getDate()
    var Year = Today.getFullYear()

    if(Year <= 99)
        Year += 1900

    return DayName[WeekDay] + " " + Day + " " + MonthName[Month] + Year
}
</script>
<script>document.write("Dzisiaj jest " + getDateStr())</script>
<script type="text/javascript" src="http://flaker.pl/track/site/1126731">
</script>
</td>
</tr>
<tr>
<td colspan="2" style="max-height: 28; background-color: rgb(211, 250, 202);">
<center>
<img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png"><a href="o%20nas.php"><img style="border: 0px solid ; width: 119px; height: 26px;" alt="" src="PRZYCISK%20O%20NAS.png"></a><img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png"><a href="newsy.php"><img style="border: 0px solid ; width: 119px; height: 26px;" alt="" src="PRZYCISK%20NEWSY.png"></a><img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png"><a href="http://www.klasa-ic.pun.pl"><img style="border: 0px solid ; width: 119px; height: 26px;" alt="" src="PRZYCISK%20FORUM.png"></a><img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png"><a href="galeria.php"><img style="border: 0px solid ; width: 119px; height: 26px;" alt="" src="PRZYCISK%20GALERIA.png"></a><img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png"><a href="inne.php"><img style="border: 0px solid ; width: 119px; height: 26px;" alt="" src="PRZYCISK%20INNE.png"></a><img style="width: 36px; height: 26px;" alt="" src="ukosnik%20kontakt.png"><a href="kontakt.php"><img style="border: 0px solid ; width: 163px; height: 26px;" alt="" src="przycisk%20kontakt.png"></a><img style="width: 26px; height: 26px;" alt="" src="ukosnik%20zwykly.png">
</center>
</td>
</tr>
<tr>