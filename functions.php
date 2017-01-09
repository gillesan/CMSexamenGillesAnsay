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



/*
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


$access_token = "3349770659-W8b3nT9PZJiNXwdqvWuJFTKBpcaoJzo320uLwr7";
$access_token_secret = "TrmvnqeJAQ5hb98KjmuE2uYA4hQLYq1YMKLUX04ZNcYUJ";

$connection = new TwitterOAuth(XKIeMVpLI6vDZoewJVk4LzV6x, VHeP82k72EV5fFagewKDNsTusgzydTFi2dTzkH8vhdUj1NBRy0, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");



class Twitter
{

}



var_dump($content);*/

