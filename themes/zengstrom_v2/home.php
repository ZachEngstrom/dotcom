<!DOCTYPE html>
<html>
	<head>
		<?php Loader::element('header_required'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/assets/css/compressed.css.php" media="all" />
		<?php global $c; if ($c->isEditMode()) { 
			echo '<link rel="stylesheet" type="text/css" href="' . $this->getThemePath() . '/assets/css/edit.css" media="all" />';
			}?>
	</head>
	<body id="<?php $page = Page::getCurrentPage(); echo str_replace(' ', '_', strtolower($page->getCollectionName())); ?>">
		<div class="body_wrapper">
			<header>
				<div class="center">
					<h1>Zach Engstrom</h1>
					<div class="title">Web Developer</div>
				</div>
			</header>
			<div class="push"></div>

		</div>
		<footer id="home">
			<div class="footer_wrapper">
				<div class="social">
					<a class="facebook" href="#"></a>
					<a class="twitter" href="#"></a>
					<a class="linkedin" href="#"></a>
				</div>
				<ul>
					<!-- <li><a href="#">Home</a></li> -->
					<li><a href="#">About</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="copy">&copy; 2014 - Zach Engstrom</div>
			</div>
		</footer>
		<?php Loader::element('footer_required'); ?>
	</body>
</html>