<?php

	function sendTweet($data = NULL) {

		require_once 'twitter.class.php';

		$consumerKey 		= 'f13aHtOr8H6P85kud4qx3Q';
		$consumerSecret 	= '5RxwNk4QGmfV0Y56K6ViPTOQrWpgvjqn7lfJp5ZwQ';
		$accessToken 		= '2164730497-HmrMmBDCJooJmQPtU3S1QOOzlXHd62xzO7VY2u1';
		$accessTokenSecret 	= 'Sml2EmLI8YSGSlNwXxjJMImtUkV7l4zYRiz8juoLqsYBb';

		try {
			$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
			$status = $twitter->send($data);
			echo $status ? 'OK' : 'ERROR';
		} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
	}

	sendTweet('Auto Tweet' );


	function sendHourlyTweet($HourlyaverageTemp, $HourlyaverageLight, $HourlyinteractionCount ) {

		require_once 'twitter.class.php';

		$consumerKey 		= 'f13aHtOr8H6P85kud4qx3Q';
		$consumerSecret 	= '5RxwNk4QGmfV0Y56K6ViPTOQrWpgvjqn7lfJp5ZwQ';
		$accessToken 		= '2164730497-HmrMmBDCJooJmQPtU3S1QOOzlXHd62xzO7VY2u1';
		$accessTokenSecret 	= 'Sml2EmLI8YSGSlNwXxjJMImtUkV7l4zYRiz8juoLqsYBb';

		try {
			$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
			$status = $twitter->send('Summary for the last hour: Average Temperature was: $HourlyaverageTemp, Average light was: $HourlyaverageLight, $HourlyinteractionCount objects were interacted with');
			echo $status ? 'OK' : 'ERROR';
		} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
	}

	function sendDailyTweet($DailyaverageTemp, $DailyaverageLight, $DailyinteractionCount ) {

		require_once 'twitter.class.php';

		$consumerKey 		= 'f13aHtOr8H6P85kud4qx3Q';
		$consumerSecret 	= '5RxwNk4QGmfV0Y56K6ViPTOQrWpgvjqn7lfJp5ZwQ';
		$accessToken 		= '2164730497-HmrMmBDCJooJmQPtU3S1QOOzlXHd62xzO7VY2u1';
		$accessTokenSecret 	= 'Sml2EmLI8YSGSlNwXxjJMImtUkV7l4zYRiz8juoLqsYBb';

		try {
			$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
			$status = $twitter->send('Summary for today: Average Temperature was: $DailyaverageTemp, Average light was: $DailyaverageLight, $DailyinteractionCount objects were interacted with');
			echo $status ? 'OK' : 'ERROR';
		} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
	}

	function sendWeeklyTweet($WeeklyaverageTemp, $WeeklyaverageLight, $WeeklyinteractionCount ) {

		require_once 'twitter.class.php';

		$consumerKey 		= 'f13aHtOr8H6P85kud4qx3Q';
		$consumerSecret 	= '5RxwNk4QGmfV0Y56K6ViPTOQrWpgvjqn7lfJp5ZwQ';
		$accessToken 		= '2164730497-HmrMmBDCJooJmQPtU3S1QOOzlXHd62xzO7VY2u1';
		$accessTokenSecret 	= 'Sml2EmLI8YSGSlNwXxjJMImtUkV7l4zYRiz8juoLqsYBb';

		try {
			$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
			$status = $twitter->send('Summary for the previous Week : Average Temperature was: $WeeklyaverageTemp, Average light was: $WeeklyaverageLight, $WeeklyinteractionCount objects were interacted with');
			echo $status ? 'OK' : 'ERROR';
		} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
	}
	
/*
	sendTweet($data);

	function sendTweet($data = NULL) {
		try {
			$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
			$status = $twitter->send($data);
			echo $status ? 'OK' : 'ERROR';
		} catch (Exception $e) {
			echo "Errrorrrr: ".$e;
		}
	}*/
	?>