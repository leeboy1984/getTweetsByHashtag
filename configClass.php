<?php
class ConfigClass {

	//Twitter Config
	var $consumer_key = "xvz1evFS4wEEPTGEFPHBog";
	var $consumer_secret = "L8qq9PZyRg6ieKGEKhZolGC0vJWLw8iEJ88DRdyOg";
	var $twitter_search_api = "https://api.twitter.com/1.1/search/tweets.json?q=";
	var $twitter_auth_url = 'https://api.twitter.com/oauth2/token';
	var $twitter_grants = 'client_credentials';
	var $max_tweets = 100;

	// DB Config
    var $dbHost = 'localhost';
    var $dbUser = 'root';
    var $dbPass = 'root';
    var $dbName = 'critizen_tweets';

    function getBearerToken(){
    	return $this->consumer_key.':'.$this->consumer_secret;
    }

    function getBearerEncoded(){
    	return base64_encode($this->getBearerToken());
    }
 }


?>