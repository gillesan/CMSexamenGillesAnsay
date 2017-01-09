<?php

require dirname(__DIR__) ."/vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$access_token = "3349770659-W8b3nT9PZJiNXwdqvWuJFTKBpcaoJzo320uLwr7";
$access_token_secret = "TrmvnqeJAQ5hb98KjmuE2uYA4hQLYq1YMKLUX04ZNcYUJ";

$connection = new TwitterOAuth(XKIeMVpLI6vDZoewJVk4LzV6x, VHeP82k72EV5fFagewKDNsTusgzydTFi2dTzkH8vhdUj1NBRy0, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");



class Twitter
{

}

var_dump($content);
