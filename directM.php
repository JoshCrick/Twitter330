<?php 

function directM(){

	require_once 'twitter.class.php';
	include('twitteroauth.php');
	//require_once 'OAuth.php';
	//require_once 'TwitterAPIExchange.php';


		$consumerKey 		= 'f13aHtOr8H6P85kud4qx3Q';
		$consumerSecret 	= '5RxwNk4QGmfV0Y56K6ViPTOQrWpgvjqn7lfJp5ZwQ';
		$accessToken 		= '2164730497-HmrMmBDCJooJmQPtU3S1QOOzlXHd62xzO7VY2u1';
		$accessTokenSecret 	= 'Sml2EmLI8YSGSlNwXxjJMImtUkV7l4zYRiz8juoLqsYBb';

		$method = 'direct_messages/new';
		$website = "http://luisls.info";
		$fbLink = "https://www.facebook.com/luisls";

try {

	$connection = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

	$url = 'https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=sitestreams&skip_status=true&include_user_entities=false';
	$requestMethod = 'GET';

	$followers = $connection->cachedRequest('followers/ids', array('user_id' => '2164730497'));
	//$followers => $previousFollowers;
 
	//$options = array("user_id" => "65188314", "text" => "Welcome to LUISIs, check out our website ". $website. "."); //
	//$connection->request($method, $options);

	print_r($followers);

	} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
}

	directM();

	
	
/*
	



	$twitter->post('direct_messages/new', $options);
	echo $direct ? 'OK' : 'ERROR';

	$twitter = new TwitterAPIExchange($settings);

			 $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($options)
             ->performRequest();
*/

?>
