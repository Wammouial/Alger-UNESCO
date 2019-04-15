function changeLang(i) {
	if( i != "fr" && i != "en" ) {
		return false;
	} else {
		var oReq = new XMLHttpRequest();
		if ( i == "fr") {
			oReq.open("get", "changeLang.php?lang=fr", true);
		} else {
			oReq.open("get", "changeLang.php?lang=en", true);
		}
		oReq.send();
	}
}