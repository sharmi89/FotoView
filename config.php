<?php

	// User ID can collect from most of web sites or developer of instagram
	define('INSTAGRAM_USER_ID', '');

	// login instagram and get the access token 
	//      https://www.instagram.com/developer/authentication/
	define('INSTAGRAM_ACCESS_TOKEN', '');

	define('PHOTO_COUNT', 12);

	// This url will serve the data from the instagram api
	function INSTAGRAM_JSON_URL($userID = INSTAGRAM_USER_ID, $access_token = INSTAGRAM_ACCESS_TOKEN, $photo_count = PHOTO_COUNT)
	{
		$url = "https://api.instagram.com/v1/users/{$userID}/media/recent/?access_token={$access_token}&count={$photo_count}";
		
		if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
			return $url;
		}
		// display error message
		return false;
	}
?>