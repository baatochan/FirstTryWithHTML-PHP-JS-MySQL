// <![CDATA[
Array.prototype.random = function(limit)
{
	if (typeof limit == 'undefined' || limit < 0) limit = 1;
	else if (!limit) limit = this.length;
	for (var i = 0, source = this, target = new Array(), n = source.length; i < limit && n > 0; i++)
	{
		do { var index = Math.random(); } while (index == 1);
		index = Math.floor(index * n);
		target.push(source[index]);
		source[index] = source[--n];
	}
	return target;
}

document.write(new Array(
// Tu wpisz kolejne elementy:

//'Nie bądź Ondycz, przestań płakać!',
'Gdy pomyśle o wycieczce do Głuchołazów, pierwsze co przychodzi mi do głowy to: "DOBRANOC"!',
'Tyko w naszej klasie kręgosłup pisze się przez "g" i "ó"! :D',
'Pani Jezierska zawstydziła panią Ryng: W ciągu niecałej minuty sprawiła, że na twarzy pani od biologii pojawił się rumieniec rozmawiając na temat jakże biologiczny xDD',
'"Choćbym 5 razy to powtórzyła, to oni tego i tak nie zrozumieją" - Pani Szymańska o naszej klasie'

).random().join(''));
// ]]>
