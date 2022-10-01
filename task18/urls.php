<?php
    require "database.php";
    $stmt = $pdo->prepare('SELECT * FROM `images`');
    $stmt->execute();
    $imgUrls = $stmt->fetchAll(PDO::FETCH_ASSOC);  

?>