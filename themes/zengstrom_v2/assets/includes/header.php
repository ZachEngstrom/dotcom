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