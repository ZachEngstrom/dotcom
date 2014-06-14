<?php defined('C5_EXECUTE') or die("Access Denied.");

$navItems = $controller->getNavItems();

/*** STEP 1 of 2: Determine all CSS classes (only 2 are enabled by default, but you can un-comment other ones or add your own) ***/
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

	//Put all classes together into one space-separated string
	$ni->classes = implode(" ", $classes);
}

//*** Step 2 of 2: Output menu HTML ***/

/********************************************** Desktop Navigation **********************************************/

echo '<ul class="homenavholder">'; //opens the top-level menu

foreach ($navItems as $ni) {

	echo '<a href="' . $ni->url . '">';
	echo '<li class="homenav">'; //opens a nav item
	echo '<div class="homeicon_' . strtolower(str_replace(" ", "_", "$ni->name")) . '"></div>';
	echo '<span class="homenavtxt">' . $ni->name . '</span>';
	
	if ($ni->hasSubmenu) {
		echo '<ul>'; //opens a dropdown sub-menu
	} else {
		echo '</li>'; //closes a nav item
		echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
	}
}

echo '</ul>'; //closes the top-level menu
