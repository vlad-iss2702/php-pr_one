<?php
    session_start();

    require "database.php";
    require "randname.php";

    $tmpPatch = "images/";
    $name = $_FILES["uploadedFile"]["name"];
    $imgSize = $_FILES["uploadedFile"]["size"];
    $namePath = explode('.', $name);
    $imageName = $namePath[0];
    $imageNewName = str_replace($imageName, $imageName, $imageRandName);
    $imageType = $namePath[1];
    $imageNameType = $imageNewName . "." . $imageType;

    if ($_FILES && $_FILES["uploadedFile"]["error"]== UPLOAD_ERR_OK) {
        if($imgSize > 2000000) {
            $message = "Размер загружаемого файла слишком большой.";
            $_SESSION['taskImgSizeError'] = $message;
            header("Location: /task18/task_18.php");
            exit;
        }
        if ( (strcasecmp($imageType, "png") != 0) && (strcasecmp($imageType, "jpg") != 0) && (strcasecmp($imageType, "jpeg") != 0)  ) {
            $message = "Не правильный формат файла.";
            $_SESSION['taskImgTypeError'] = $message;
            header("Location: /task18/task_18.php");
            exit;
        }
        else {
            move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $tmpPatch . $imageNameType);

            $sql = "INSERT INTO images (url) VALUES (:url)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['url' => $imageNameType]);

            $message = "Изображение успешно добавлено.";
            $_SESSION['taskImgSuccess'] = $message;
            header("Location: /task18/task_18.php");
        }
    }
    else {
        $message = "Загрузите изображение.";
        $_SESSION['taskImgNameError'] = $message;
        header("Location: /task18/task_18.php");
        exit;
    }
