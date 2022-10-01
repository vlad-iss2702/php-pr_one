<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");

$sql = "SELECT * FROM misters WHERE email=:email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);

$misterTask = $stmt->fetch(PDO::FETCH_ASSOC);


if(!empty($misterTask)) {

    
    $message = "Такой логин уже существует.";
    $_SESSION['taskAlarm'] = $message;

    header("Location: /task_13.php");

    
    exit;
}


$sql = "INSERT INTO misters (email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);


$stmt->execute(['email' => $email, 'password' => $passwordHash ]);


$message = "Вы успешно прошли регистрацию.";
$_SESSION['taskSuccess'] = $message;

header("Location: /task_13.php");

?>