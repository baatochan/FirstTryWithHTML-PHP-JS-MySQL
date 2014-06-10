var TekstPrzed="egzaminu!!!"
var TekstJuz="Dzisiaj egzamin, życzymy wszystkim powodzenia!"
var TekstPo="Po egzaminie to już luz :D"
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
if (LicznikDni<-2)
document.write(TekstPo)
if (LicznikDni==-1)
document.write(TekstJuz)
if (LicznikDni==-2)
document.write(TekstJuz)
else if (LicznikDni==0)
document.write(TekstJuz)
else if (LicznikDni>0)
if (LicznikDni==1)
document.write("Został tylko "+LicznikDni+" dzień do "+TekstPrzed)
else if ((LicznikDni>=2) & (LicznikDni<=4))
document.write("Zostały tylko "+LicznikDni+" dni do "+TekstPrzed)
else
document.write("Zostało tylko "+LicznikDni+" dni do "+TekstPrzed)}
ZliczajDni(2012,04,24)