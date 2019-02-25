jQuery('#navbarDropdown').click(function() {
    jQuery(this).next('.dropdown-menu').toggle()
})

jQuery('#navbarDropdownEve').click(function() {
    jQuery(this).next('.dropdown-menu').toggle()
})

jQuery('#shopDropdown').click(function() {
    jQuery(this).next('.dropdown-menu').toggle()
})

jQuery('#Dropdown-ideas').click(function() {
    jQuery(this).next('.dropdown-menu').toggle()
})

jQuery('header .navbar-toggler').click(function() {
    jQuery('#navbarTogglerDemo03').slideToggle(0)
})

document.addEventListener('DOMContentLoaded', function(event) {

    cookieChoices.showCookieConsentBar('En poursuivant votre navigation sur notre site vous acceptez l\'utilisation de cookies afin de nous permettre d\'améliorer votre navigation',

      '[J\'accepte]', '[En savoir plus]', 'mentionslgl');

  });

function like(){

	var hearth = document.getElementById('hearth');
	if (hearth.src === "http://127.0.0.1:8000/img/like.png") {
		hearth.src = "img/likeRed.png";
		console.log("yop");
	} else {
		hearth.src = "img/like.png";
	}
}
