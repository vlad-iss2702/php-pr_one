<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");

$sql = "SELECT * FROM texts WHERE text=:text";
$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $text]);

$textTask = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($textTask)) {
    $message = "Danger.";
    $_SESSION['taskAlarm'] = $message;

    header("Location: /task_12.php");
    exit;
}


$sql = "INSERT INTO texts (text) VALUES (:text)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $text]);

$message = "Success.";
$_SESSION['taskSuccess'] = $message;

header("Location: /task_12.php");

?>