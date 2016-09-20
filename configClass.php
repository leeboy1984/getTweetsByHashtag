<?php
class ConfigClass {

	//Twitter Config
	var $consumer_key = "consumer_key";
	var $consumer_secret = "consumer_secret";
	var $twitter_search_api = "https://api.twitter.com/1.1/search/tweets.json?q=";
	var $twitter_auth_url = 'https://api.twitter.com/oauth2/token';
	var $twitter_grants = 'client_credentials';
	var $max_tweets = 100;

	// DB Config
    var $dbHost = 'db_host';
    var $dbUser = 'db_user';
    var $dbPass = 'db_pass';
    var $dbName = 'db_dbname';

    function getBearerToken(){
    	return $this->consumer_key.':'.$this->consumer_secret;
    }

    function getBearerEncoded(){
    	return base64_encode($this->getBearerToken());
    }
 }


?>
