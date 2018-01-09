<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" media="only screen and (min-width : 600px)" href="css/kc.css">
	<title>Music Events :: Home</title>
</head>

<body>
	<header>
		<img src="images/2016-08-01_579f5b5ad6bba_kelhamislandlogo2.bmp" 
		class="headerLogo">
		<h1>Kelham Island Museum - Shelves</h1>
	</header>
		<?php 
			require_once('includes/conn.inc.php');
			$stmt = $pdo->prepare("SELECT * FROM Exhibit");
			$stmt->bindParam(':image', $image, PDO::PARAM_STR);
			$stmt->bindParam(':exhibitID', $exhibitID, PDO::PARAM_STR);
			$stmt->bindParam(':location', $location, PDO::PARAM_STR);
			$stmt->execute();
    	?>
		<h2>Click on Exhibit below for more information</h2>

	<div class='imageGrid'>
		<?php
			while ($row = $stmt->fetchObject()) 
			{
				echo "<div class='galleryImages'>
				<a href='shelve_Item.php?exhibitID={$row->exhibitID}' target='_self'>
				<img src='{$row->image}' class = 'imageInGallery'alt='icon'>
				</a><p>{$row->location}</p></div>";
			}
		?>	
	</div>

	<footer>
		<p>&copy; Copyright 2018</p>
	</footer>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>