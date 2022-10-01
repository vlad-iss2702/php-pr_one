<?php
session_start();


$_SESSION['count'] = (int) $_SESSION['count'] +1;
//$count = $_SESSION['count'] = (int) $_SESSION['count'] +1;


/*$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");


$sql = "INSERT INTO count (count) VALUES (:count)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['count' => $count]);


$_SESSION['taskSuccess'] = $count;*/
header("Location: /task_15.php");

?>