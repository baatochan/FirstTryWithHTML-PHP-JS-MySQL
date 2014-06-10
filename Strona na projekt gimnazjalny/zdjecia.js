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
'<img src="1.png" width="692" height="360" alt="Włochy">',
'<img src="2.png" width="692" height="360" alt="Włochy">',
'<img src="3.png" width="692" height="360" alt="Włochy">',
'<img src="4.png" width="692" height="360" alt="Włochy">'

).random().join(''));
// ]]>
