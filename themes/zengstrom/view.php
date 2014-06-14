<?php
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('assets/includes/header.php'); 
	?>
<div id="wrapper">
	<a href="/">
		<div class="logosmallmobile"></div>
	</a>
	<?php $ga = new GlobalArea('Main Nav');$ga->display($c); ?>
	<?php $ga = new GlobalArea('Main Mobile Nav');$ga->display($c); ?>
	<div class="content">
		<h1><?php $page = Page::getCurrentPage(); echo $page->getCollectionName(); ?></h1>
		<?php $a = new Area('Content');$a->display($c); ?>
		<?php print $innerContent;?>
	</div>
</div>
<div class="push"></div>
<?php $this->inc('assets/includes/footer.php'); ?>