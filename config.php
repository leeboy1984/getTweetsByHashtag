<?php
$config['consumer_key'] = "";
$config['consumer_secret'] = "";
$config['bearer_token'] = $config['consumer_key'].':'.$config['consumer_secret'];
$config['bearer_encoded'] = base64_encode($config['bearer_token']);
$config['twitter_search_api'] = "https://api.twitter.com/1.1/search/tweets.json?q=";
$config['max_tweets'] = 100;

?>