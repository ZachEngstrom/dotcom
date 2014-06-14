<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('assets/includes/header.php'); 
?>
<div id="wrapper">
	<?php $a = new Area('Home Mobile Nav');$a->display($c); ?>
	<div class="homePanelBlue">
		<div class="dblogoHome"></div>
		<div class="hometxt_holder">
			<span class="homeintrotxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh, ac blandit libero porttitor quis. Maecenas non feugiat nisi.</span>
		</div>
	</div>
	<?php $a = new Area('Home Nav');$a->display($c); ?>
</div>
<?php $this->inc('assets/includes/footer.php'); ?>