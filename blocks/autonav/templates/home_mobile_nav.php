<?php defined('C5_EXECUTE') or die("Access Denied.");

$navItems = $controller->getNavItems();
foreach ($navItems as $ni) {
	$classes = array();

	if ($ni->isCurrent) {
		//class for the page currently being viewed
		$classes[] = 'nav-selected';
	}

	if ($ni->inPath) {
		//class for parent items of the page currently being viewed
		$classes[] = 'nav-path-selected';
	}

	$ni->classes = implode(" ", $classes);
}

//*** Step 2 of 2: Output menu HTML ***/

/********************************************** Mobile Navigation **********************************************/

echo '<ul class="navmobileholder">'; //opens the top-level menu

foreach ($navItems as $ni) {

	echo '<a href="' . $ni->url . '">';
	echo '<li class="navmobileitem">'; //opens a nav item
	echo '<div class="homeicon_' . strtolower(str_replace(" ", "_", "$ni->name")) . '_mobile' . '"></div>';
	echo '<span class="homenavtxtmobile">' . $ni->name . '</span>';
	
	if ($ni->hasSubmenu) {
		echo '<ul>'; //opens a dropdown sub-menu
	} else {
		echo '</li></a>'; //closes a nav item
		echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
	}
}

echo '</ul>'; //closes the top-level menu