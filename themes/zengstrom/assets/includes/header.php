<!DOCTYPE>
<html>
    <head>
        <?php Loader::element('header_required'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/assets/css/compressed.css.php" media="all" />
        <?php global $c; if ($c->isEditMode()) { 
          echo '<link rel="stylesheet" type="text/css" href="' . $this->getThemePath() . '/assets/css/edit.css" media="all" />';
          }?>
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/respond.src.js"></script>
		<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/site.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
    </head>
    <body id="<?php $page = Page::getCurrentPage(); echo str_replace(' ', '_', strtolower($page->getCollectionName())); ?>">