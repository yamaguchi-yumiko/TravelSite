function SFMCsetCookie(name, value, days) {
	if (!name || !value) {
		return;
	}
	var expires = '';
	if (days) {
		d = new Date();
		d.setDate(d.getDate() + 30);
		expires = '; expires=' + d.toUTCString();
	}

	document.cookie = name + "=" + value + expires;
}

var url = window.location.href;
var keyToFind = 'sfmc_id';
if (url.indexOf(keyToFind + '=') > -1) {
	var sfmcid = location.href.split('sfmc_id=').slice(-1)[0];
	SFMCsetCookie('sfmc_id', sfmcid, 365);
}
