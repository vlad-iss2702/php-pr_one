<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$passwordVerify = password_verify($password, $passwordHash);


/*echo $password;
echo "<br />";
echo $passwordHash;
echo "<br />";
echo $passwordVerify;


exit;*/

$pdo = new PDO("mysql:host=localhost;dbname=marlin_db;", "root", "");

$sql = "SELECT * FROM auth WHERE email=:email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


if(empty($user)) {
    $message = "Не правильно введены логин или пароль.";
    $_SESSION['taskLoginAlarm'] = $message;
    header("Location: /task_16.php");
    exit;
}

if(!password_verify($password, $user['password'])) {
    $message = "Не правильный пароль.";
    $_SESSION['taskPasswordAlarm'] = $message;
    header("Location: /task_16.php");
    exit;
}

$_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];

header("Location: /task_16.php");



/*$sql = "INSERT INTO misters (email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);


$stmt->execute(['email' => $email, 'password' => $passwordHash ]);


$message = "Вы успешно прошли регистрацию.";
$_SESSION['taskSuccess'] = $message;*/

//header("Location: /task_15.php");

?>