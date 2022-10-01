<?php
session_start();

$message = $_POST['message'];


$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");

$sql = "SELECT * FROM message WHERE message=:message";
$stmt = $pdo->prepare($sql);
$stmt->execute(['message' => $message]);

$messageTask = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($messageTask)) {
    $_SESSION['taskAlarm'] = "Введенные данные уже существуют.";

    header("Location: /task_14.php");
    exit;
}


$sql = "INSERT INTO message (message) VALUES (:message)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['message' => $message]);




$_SESSION['taskSuccess'] = $message;

header("Location: /task_14.php");

?>