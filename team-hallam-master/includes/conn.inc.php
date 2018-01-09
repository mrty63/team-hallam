<?php
$dsn = 'mysql:host=localhost;dbname=b6027734_db3';
$user = 'b6027734';
$password = 'morris22';
try 
{ 
$pdo = new PDO($dsn, $user, $password); 
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) 
{ 
echo 'Connection failed again: ' . $e->getMessage();
}
?>