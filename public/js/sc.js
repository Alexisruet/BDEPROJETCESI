jQuery('#navbarDropdown').click(function() {
	jQuery(this).next('.dropdown-menu').toggle()
})

jQuery('header .navbar-toggler').click(function() {
	jQuery('#navbarTogglerDemo03').slideToggle(0)
})
