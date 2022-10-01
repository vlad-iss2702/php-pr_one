<?php

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");
$sql = "INSERT INTO texts (text) VALUES (:text)";
$stmt = $pdo->prepare($sql); 
$stmt->execute(['text' => $text]);

header("Location: /task_11.php");

?>