<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/galleryStyle.css">
	<title>Music Events :: Home</title>
</head>

<body>
 <div class = "backgroundContainer">
	<header>
	<div class = "headerContainer">
		<img src="images/2016-08-01_579f5b5ad6bba_kelhamislandlogo2.bmp" 
		class="headerLogo">
		<h1>Kelham Island Museum - Shelves</h1>
	</div>
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
		<div class='galleryGrid'>
			
			<?php
				while ($row = $stmt->fetchObject()) 
				{
					echo 
					"<div class='galleryCell'>
						<a href='shelve_Item.php?exhibitID={$row->exhibitID}' class='galleryCellImage' target='_self'>
						<img src='{$row->image}' alt='icon'>
						</a>
						<p>{$row->location}</p>
					</div>";
				}
			?>	
			
		</div>
	</div>
 </div>
	<footer>
		<p>&copy; Copyright 2018</p>
	</footer>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>