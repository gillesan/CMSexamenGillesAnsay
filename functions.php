<?php
/*
 * Ici je crée des zones pour mes menu ainsi WP sais qu'il y a des menus.
 * Première étape pour les menus
 */
register_nav_menus(array(
    'main-menu' => "Description zone pour back-office"
));


//include_once(dirname(__FILE__) . '/extensions/Twitter.php'); 

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth(XKIeMVpLI6vDZoewJVk4LzV6x, VHeP82k72EV5fFagewKDNsTusgzydTFi2dTzkH8vhdUj1NBRy0, 3349770659-W8b3nT9PZJiNXwdqvWuJFTKBpcaoJzo320uLwr7, TrmvnqeJAQ5hb98KjmuE2uYA4hQLYq1YMKLUX04ZNcYUJ);
$content = $connection->get("account/verify_credentials");



class Twitter
{

}


