<?php
// 99% of this is from my github shit that i put somewhere
	require('config.php');

	error_reporting(0);


	if(!isset($_GET["steamid"])){
		$steamID64 = '76561198074425791';
	} else {
		$steamID64 = $_GET["steamid"];
	}

	$summaryUrl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $APIKey . "&steamids=" . $steamID64;


  $json = file_get_contents($summaryUrl);

  $datalmao2 = json_decode($json, true);


  $datalmao = $datalmao2["response"]["players"][0];

	$steam64id = $datalmao['steamid'];

	$steam_persona = $datalmao['personaname'];

  $steam_profile_pic = $datalmao['avatarfull'];



// no i will not add music, get your darkrp dev to do it
?>
