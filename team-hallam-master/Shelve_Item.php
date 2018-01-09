<?php
require_once('includes/conn.inc.php');
$sql = ("SELECT * FROM Exhibit WHERE exhibitID LIKE :exhibitID");                                
$stmt = $pdo->prepare($sql);                                     
$stmt->bindParam(':exhibitID', $_GET['exhibitID'], PDO::PARAM_STR); 
$stmt->execute();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/event.css">
<link rel="stylesheet" media="only screen and (min-width : 600px)" href="css/kc.css">
<title>Music Events :: Contact Us</title>
</head>

<body>
	<header>
	</header>

	<?php
	while ($row = $stmt->fetchObject()) 
	{

	echo "<h2>{$row->name}</h2>";
	echo "<img src='{$row->image}'";
	echo "<h3>{$row->location}</h3>";
	echo "<p>{$row->origin}</p>";
	echo "<p>{$row->exhibitUse}</p>";
	echo "<p>{$row->description}</p>";
	}
	?>
	<footer>
		<p>&copy; Copyright 2018</p>
	</footer>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
