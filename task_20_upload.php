<?php


for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
    upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i] );
}

function upload_file($imgName, $imgTmp ) {
    $result = pathinfo($imgName);

    $imgName = uniqid() . "." .$result['extension'];

    move_uploaded_file('images/' . $imgName);
    
}

header("Location: /task_20.php");