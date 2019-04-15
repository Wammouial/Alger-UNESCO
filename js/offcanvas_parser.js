function clickChoice(l){
	// On efface tous les div meme ceux qui sont deja caches
	document.getElementById("offcanvas-base").style.display = "none";
	document.getElementById("offcanvas-casbah").style.display = "none";
	document.getElementById("offcanvas-1").style.display = "none";
	document.getElementById("offcanvas-2").style.display = "none";
	document.getElementById("offcanvas-3").style.display = "none";
	document.getElementById("offcanvas-4").style.display = "none";	

	// Regarde si le parametre de l'url est #o1 et si oui affiche #offcanvas-3
	if (l == '#o1') {
		document.getElementById("offcanvas-1").style.display = "block";
	} 
	// Regarde si le parametre de l'url est #o2 et si oui affiche #offcanvas-3
	else if (l == '#casbah') {
		document.getElementById("offcanvas-casbah").style.display = "block";
	} 
	// Regarde si le parametre de l'url est #o2 et si oui affiche #offcanvas-3
	else if (l == '#o2') {
		document.getElementById("offcanvas-2").style.display = "block";
	} 
	// Regarde si le parametre de l'url est #o3 et si oui affiche #offcanvas-4
	else if (l == '#o3') {
		document.getElementById("offcanvas-3").style.display = "block";
	}
	// Regarde si le parametre de l'url est #o4 et si oui affiche #offcanvas-4
	else if (l == '#o4') {
		document.getElementById("offcanvas-4").style.display = "block";
	} 
	// Si la valeur du parametre de l'url est differente affiche #offcanvas-1
	else {
		document.getElementById("offcanvas-base").style.display = "block";
	}
};
	
$(function() {
   $(".list-group a").click(function() {
      // remove classes from all
      $(".list-group a").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
   });
});
