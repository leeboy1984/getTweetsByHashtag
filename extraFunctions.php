<?php
require_once './config.php';

function verifyConfig(){
	$config = new ConfigClass;
	echo "Twitter Config\r\n";
	echo "Consumer Key: '".$config->consumer_key."'\r\n";
	echo "Consumer Secret: '".$config->consumer_secret."'\r\n";
	echo "Bearer Token: '".$config->getBearerToken()."'\r\n";
	echo "Bearer Encoded: '".$config->getBearerEncoded()."'\r\n";
	echo "Twitter API URL: '".$config->twitter_search_api."'\r\n";
	echo "Max tweets: '".$config->max_tweets."'\r\n";

	// DB Config
    echo $config->dbHost."'\r\n";
    echo $config->dbUser."'\r\n";
    echo $config->dbPass."'\r\n";
    echo $config->dbName."'\r\n";
	

	echo "DB Config\r\n";
}

function getAccessTokens(){
	$config = new ConfigClass;

	$fields = array(
			'grant_type' => urlencode($config->twitter_grants),
	);

	$headers = array();
	$headers[] = 'Accept-Encoding: gzip, deflate';
	$headers[] = 'Accept-Language: en-US,en;q=0.5';
	$headers[] = 'Cache-Control: no-cache';
	$headers[] = 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8';
	$headers[] = 'Authorization: Basic '.$config->getBearerEncoded();
	//$headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0';
	//$headers[] = 'X-MicrosoftAjax: Delta=true';

	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

	$ch = curl_init($config->twitter_auth_url);
	
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_HEADER, $headers);


	$result = curl_exec($ch);
	print_r($result);
	curl_close($ch);
}

?>