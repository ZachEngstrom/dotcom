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

echo '<div class="subnavholdermobile">';
echo '<a href="#" class="show_hide"></a>';
echo '<div class="slidingDiv">';

foreach ($navItems as $ni) {
	$page = Page::getCurrentPage(); 
	$currentpage = $page->getCollectionName();
	
	if ($currentpage == $ni->name) {
		echo '<li class="navmobileitem ' . $ni->classes . '">';
		echo '<div class="homeicon_' . strtolower(str_replace(" ", "_", "$ni->name")) . '_mobile' . '"></div>';
		echo '<span class="homenavtxtmobile">' . $ni->name . '</span>';
	} else {
		echo '<a href="' . $ni->url . '">';
		echo '<li class="navmobileitem">';
		echo '<div class="homeicon_' . strtolower(str_replace(" ", "_", "$ni->name")) . '_mobile' . '"></div>';
		echo '<span class="homenavtxtmobile">' . $ni->name . '</span>';	
	}	

	if ($ni->hasSubmenu) {
		echo '<ul>'; //opens a dropdown sub-menu
	} else {
		echo '</li></a>'; //closes a nav item
		echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
	}
}
echo '</div>';
echo '</div>';