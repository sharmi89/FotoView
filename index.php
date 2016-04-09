<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/fotoView.css">
		<title>Foto View</title>
	</head>

	<?php
		/**
		 * Get data for initial loading page and refreshing the page.
		 */
		require_once 'InstagramDataController.php';
		$instagramDataController = new InstagramDataController();
		$insData = $instagramDataController->getData();
	?>

	<body>
		<!-- Set here, ajax dropdown select to search users by name and once select a user, UserID will through ajax call and update the content -->
		
		<div class="container" id="container">
			<!-- Contents :: this will update automatically by ajax in a time intervel -->
			<?php include 'content.php'; ?>
		</div>
		 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		<script src="js/bootstrap-image-gallery.min.js"></script>
		<script src="js/foto-view.js"></script>

	</body>
</html>