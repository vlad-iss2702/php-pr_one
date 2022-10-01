<?php
    
    $id = $_GET['id'];

    echo $id;
    
    require "database.php";
    $stmt = $pdo->prepare('DELETE FROM images WHERE id = :id');
    $stmt->bindParam('id', $id);
    $stmt->execute();


    header('Location: /task18/task_18.php');

?>