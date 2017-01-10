<?php
/*
 * Ici je crée des zones pour mes menu ainsi WP sais qu'il y a des menus.
 * Première étape pour les menus
 */


//include_once(dirname(__FILE__) . '/extensions/Twitter.php'); 
//include_once(dirname(__DIR__) . '/extensions/Twitter.php'); 

include dirname(__DIR__) . '/CMSexamenGillesAnsay/extensions/Twitter.php';


register_nav_menus(array(
    'main-menu' => "Description zone pour back-office"
));




