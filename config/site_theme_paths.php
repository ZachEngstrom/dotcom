<?php   

defined('C5_EXECUTE') or die("Access Denied.");

$v = View::getInstance();
$v->setThemeByPath('/login', "zengstrom"); 
$v->setThemeByPath('/403', "zengstrom");
$v->setThemeByPath('/register', "zengstrom");
$v->setThemeByPath('/download_file', "zengstrom");
$v->setThemeByPath('/install', "zengstrom");
$v->setThemeByPath('/maintenance_mode', "zengstrom");
$v->setThemeByPath('/members', "zengstrom");
$v->setThemeByPath('/page_forbidden', "zengstrom");
$v->setThemeByPath('/upgrade', "zengstrom");
$v->setThemeByPath('/maintenance_mode', "zengstrom");
$v->setThemeByPath('/page_not_found', "zengstrom");
$v->setThemeByPath('/user_error', "zengstrom");


/* 
	you can override system layouts here  - but we're not going to by default 
	
	For example: if you would like to theme your login page with the Green Salad theme,
	you would uncomment the lines below and change the second argument of setThemeByPath 
	to be the handle of the the Green Salad theme "greensalad" 

*/

/*
$v = View::getInstance();

$v->setThemeByPath('/login', "yourtheme");
$v->setThemeByPath('/page_forbidden', "yourtheme");
$v->setThemeByPath('/register', "yourtheme");

*/