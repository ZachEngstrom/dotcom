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
echo '<div class="subnavbar">';
echo '<ul class="subnavholder">'; //opens the top-level menu
echo '<div class="homeholder">
		 <a href="/">
			 <!--li class="subnavitembg"-->
				 <div class="logosmall"></div>
				 <!--span class="subnavtxt ">Home</span-->
			 </li>
		 </a>
	 </div>
	 <div class="insidepgholder">';
foreach ($navItems as $ni) {
	$page = Page::getCurrentPage(); 
	$currentpage = $page->getCollectionName();
	
	if ($currentpage == $ni->name) {
		echo '<li class="subnavitembg">';
		echo '<div class="' . strtolower(str_replace(" ", "_", "$ni->name")) . ' ' . $ni->classes . '"></div>';
		echo '<span class="subnavtxt' . ' ' . $ni->classes . '">' . $ni->name . '</span>';
	} else {
		echo '<a href="' . $ni->url . '">';
		echo '<li class="subnavitembg">';
		echo '<div class="' . strtolower(str_replace(" ", "_", "$ni->name")) . ' ' . $ni->classes . '"></div>';
		echo '<span class="subnavtxt' . ' ' . $ni->classes . '">' . $ni->name . '</span>';	
	}	

	if ($ni->hasSubmenu) {
		echo '<ul>'; //opens a dropdown sub-menu
	} else {
		echo '</li></a>'; //closes a nav item
		echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
	}
}
echo '</div>';
echo '</ul>'; //closes the top-level menu
echo '</div>'; //closes the top-level menu