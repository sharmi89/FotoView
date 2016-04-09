<?php
require_once 'InstagramDataController.php';

/**
 * Allows only for post request, for authentication in future
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_POST['action'])) {
    	return false;
    }

	switch ($_POST['action']) {
		case 'getData':
			$instagramDataController = new InstagramDataController();
			$insData = $instagramDataController->getData();
			$contentView = include 'content.php';
			return $contentView;

		case 'addComment':
			# code...
			break;
		case 'deleteComment':
			# code...
			break;
		
		default:
			# code...
			break;
	}

}