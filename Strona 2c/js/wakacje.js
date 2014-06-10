var TekstPrzed="końca roku szkolnego. xD"
var TekstJuz="Juz dziś koniec budy!"
var TekstPo="Wakacje!!!"
var TablicaMiesiecy=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
function ZliczajDni(CelRok,CelMiesiac,CelDzien)
{var Dzisiaj=new Date()
var DzisiajRok=Dzisiaj.getYear()
if ((DzisiajRok>=00) && (DzisiajRok<=1900)) {DzisiajRok=1900+DzisiajRok;}
var DzisiajMiesiac=Dzisiaj.getMonth()
var DzisiajDzien=Dzisiaj.getDate()
var DzisiajData=TablicaMiesiecy[DzisiajMiesiac]+" "+DzisiajDzien+", "+DzisiajRok
var CelData=TablicaMiesiecy[CelMiesiac-1]+" "+CelDzien+", "+CelRok
var LicznikDni=(Math.round((Date.parse(CelData)-Date.parse(DzisiajData))/(24*60*60*1000))*1)
if (LicznikDni<0)
document.write(TekstPo)
else if (LicznikDni==0)
document.write(TekstJuz)
else if (LicznikDni>0)
if (LicznikDni==1)
document.write("Został tylko "+LicznikDni+" dzień do "+TekstPrzed)
else if ((LicznikDni>=2) & (LicznikDni<=4))
document.write("Zostały tylko "+LicznikDni+" dni do "+TekstPrzed)
else
document.write("Zostało tylko "+LicznikDni+" dni do "+TekstPrzed)}
ZliczajDni(2011,06,22)