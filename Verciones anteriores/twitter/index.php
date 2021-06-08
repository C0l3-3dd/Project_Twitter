<?php 
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

    include "twitteroauth/twitteroauth.php";

    $consumer_key = "MTb5zpbtaYNXj4KusOJafllPj";
    $consumer_secret = "BcYwpCGnGo1LHLrGa0o9pbvHDKaB6AGcOVjKIaY7koDiMsTD2W";
    $access_token = "2324999599-13WrCWEkqTumqlqJZmaPvOkQy7MTb3zOLZp3AJu";
    $access_token_secret = "PO3xde6sJsZvSEgmtuKiSSa50slCH1OfSsuangrrkE3LB";

    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

    $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=paz_con_obrador&result_type=recent&count=100');
	//$tweets2 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=FueraAMLO&result_type=recent&count=100');
	//$tweets2 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=TeodiamosAMLO&result_type=recent&count=100');
	//$tweets3= $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=viva_la_4t&type=recent&count=100&count=100&until=2019-11-07');
	$tweets3= $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=viva_la_4t&type=recent&count=100&count=100');
?>
<!DOCTYPE html>
<html lang ="es">
	<head>
		<meta charset="UTF-8">
		<title>Busquedas en Twitter</title>
	</head>
	<body>
	<table border="1">
		<tr>
			<td><img src="https://scontent.fpbc2-1.fna.fbcdn.net/v/t1.0-9/p960x960/71870674_10159151456854782_7933819964635480064_o.jpg?_nc_cat=1&_nc_oc=AQlVPf6UGbCZjUsQJF4YVfM-DJhJrMQ65lW8p2zwHzlWxAm5ZioVExi0rzuQGczlmKN86OOFxwZpn0EAQvaxWal3&_nc_ht=scontent.fpbc2-1.fna&oh=5ea657ce33016661ca06afb6cc367086&oe=5E4C4FA2" width="400" height="400"></td>
			<td>   COMEMTARIOS DE ANDRES MANUEL LOPEZ OBRADOR  :)</td>
			<td> <img src="https://static01.nyt.com/images/2019/08/07/multimedia/07Turati-ES/07Turati-ES-master1050.jpg" width="400" height="400"></td>
		</tr>
		<tr>
			<td> </td>
			<td> <?php foreach ($tweets->statuses as $key => $tweet) 
        { ?>
            Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text."-".$tweet->created_at;?><br>
        <?php } ?></td>
			<td> <?php foreach ($tweets3->statuses as $key => $tweet) 
        { ?>
            Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text."-".$tweet->created_at;?><br>
        <?php } ?></td>
		</tr>
	</table>
	<?php
	foreach($tweets->statuses as $key => $tweet) {
	
	$dato = $tweet->text."-".$tweet->created_at;
	$file = fopen("twitter.txt", "a");
	fwrite($file,$dato.PHP_EOL);
	}
	fclose($file);	
	?>
	</body>
</html>	

