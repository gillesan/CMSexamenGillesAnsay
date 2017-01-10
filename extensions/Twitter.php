<?php

require dirname(__DIR__) . "/vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

/*

  $access_token = "3349770659-W8b3nT9PZJiNXwdqvWuJFTKBpcaoJzo320uLwr7";
  $access_token_secret = "TrmvnqeJAQ5hb98KjmuE2uYA4hQLYq1YMKLUX04ZNcYUJ";

  $connection = new TwitterOAuth(XKIeMVpLI6vDZoewJVk4LzV6x, VHeP82k72EV5fFagewKDNsTusgzydTFi2dTzkH8vhdUj1NBRy0, $access_token, $access_token_secret);
  $content = $connection->get("account/verify_credentials");



  class Twitter
  {

  }

  var_dump($content); */





global $wp;

class Tweets {

    private $key = "XKIeMVpLI6vDZoewJVk4LzV6x";
    private $secret_key = "VHeP82k72EV5fFagewKDNsTusgzydTFi2dTzkH8vhdUj1NBRy0";
    private $access_token = "3349770659-W8b3nT9PZJiNXwdqvWuJFTKBpcaoJzo320uLwr7";
    private $access_token_secret = "TrmvnqeJAQ5hb98KjmuE2uYA4hQLYq1YMKLUX04ZNcYUJ";
    private $connection;

    function __construct() {
        /*
         * Ajoute une action qui s'éxecute lors de la création du menu du back-office
         */
        add_action('admin_menu', array($this, 'init'));
        $this->connection = new TwitterOAuth(
                $this->key, $this->secret_key, $this->access_token, $this->access_token_secret
        );
    }

    /**
     * Crée une nouvelle page coté back-office et ajoute le lien de la nouvelle page dans le menu du back-office
     */
    public function init() {
        add_options_page("Tweets", 'Tweets', 'administrator', 'tweets.php', array($this, 'displayAdminPage'));
    }

    /**
     * Affiche la page du back-office
     */
    public function displayAdminPage() {
        ob_start();
        echo 'test';
    }

    /*
     * Va checrher le dernier tweets
     * Premier paramètre est la limit de tweet
     * Deuxième paramètre est le nom de la page twitter
     */

    public function getTweets($limit, $nameTwitter) {
        $this->connection->get("account/verify_credentials");
        $result = $this->connection->get('statuses/user_timeline', [
            'screen_name' => $nameTwitter,
            'exclude_replies' => true,
            'count' => $limit
        ]);
        return array_splice($result, 0, 25);
    }

    /*
     * Crée des nouveau post avec les tweets
     */

    public function generate($limit, $nameTwitter) {
        if (get_term_by('name', 'Tweet', 'category') === false) {
            $category = wp_insert_term(
                    'Tweet', 'category', array(
                'description' => 'Tweets',
                'slug' => 'tweets',
                    )
            );
        } else {
            $term = get_term_by('name', 'Tweet', 'category');
            $category = array('term_id' => $term->term_id);
        }
        foreach ($this->getTweets($limit, $nameTwitter) as $tweet) {
            $my_post = array(
                'post_title' => 'Twitter',
                'post_content' => $tweet->text,
                'post_status' => 'publish',
                'post_type' => 'post',
                'post_author' => 1,
                'post_category' => array($category['term_id']),
            );
            wp_insert_post($my_post);
        }
    }

    /**
     * Add cron action in wp-cron
     */
    public function cron() {
        wp_schedule_event(time(), 'hourly', array($this, 'generate'));
    }

}
