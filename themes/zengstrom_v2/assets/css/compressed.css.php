<?php
/*
* To use this in your HTML, link to it in the usual way:
* <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/compressed.css.php" />
*/
/* Add your CSS files to this array */
$cssFiles = array(
	"home.css",
	"edit.css"
);
/**
 * Ideally, you wouldn't need to change any code beyond this point.
 */
$buffer = "";

foreach($cssFiles as $cssFile)
	{
	$buffer.= file_get_contents($cssFile);
	}

// Remove comments

$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

// Remove space after colons

$buffer = str_replace(': ', ':', $buffer);

// Remove whitespace

$buffer = str_replace(array(
	"\r\n",
	"\r",
	"\n",
	"\t",
	'  ',
	'    ',
	'    '
) , '', $buffer);

// Enable GZip encoding.

ob_start("ob_gzhandler");

// Enable caching

header('Cache-Control: public');

// Expire in one day

header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

// Set the correct MIME type, because Apache won't set it for us

header("Content-type: text/css");

// Write everything out

echo ($buffer);
?>