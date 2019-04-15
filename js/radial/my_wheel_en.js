window.onload = function () {

			var piemenu = new wheelnav('piemenu');
			piemenu.spreaderInTitle = 'Menu';
			piemenu.spreaderOutTitle = 'Algiers';
			piemenu.spreaderTitleFont = '200 24px Impact, Charcoal, sans-serif';
			piemenu.spreaderRadius = piemenu.wheelRadius * 0.34;
			piemenu.clockwise = false;
			piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
			piemenu.selectedNavItemIndex = null;
			piemenu.createWheel();
			$('.radial').hide();  //Pour ne pas voir le menu radial sur les pages autres que l'acceuil des le debut
        };
		