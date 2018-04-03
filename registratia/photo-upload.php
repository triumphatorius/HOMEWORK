<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
    if ($_FILES['photo']['error'] == UPLOAD_ERR_OK && $_FILES['photo']['type'] == 'image/jpeg') { //Checke if there is no error
        $destiation_dir = dirname(__FILE__) . '/photos/' . $_FILES['photo']['name']; //Director where you need to put this file
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $destiation_dir)) { //Move the file to desired directory.
            echo 'Отлично фото загужено! '; //Send message to user that file is uploaded`
        } else {
            echo 'Фото аватар не загружен ';
        }
    } else {
        switch ($_FILES['photo']['error']) {


            case UPLOAD_ERR_FORM_SIZE:
            case UPLOAD_ERR_INI_SIZE:
                echo 'Размер фото слишком большой';
                brake;
            case UPLOAD_ERR_NO_FILE:
                echo 'Фото не выбрано';
                break;
            default:
                echo 'Ошибка загрузки фото';
        }
    }

}
?>
<!--<html>
<head>
    <title>Basic File Upload</title>
</head>
<body>
<h1>Basic File Upload</h1>
<form method="post" action="photo-upload.php" enctype="multipart/form-data">
    <label for="photo">Profile Pic</label>
    <input type="file" id="photo" name="photo"></br>
    <input type="submit" value="Click To Upload">
</form>
</body>
</html>-->

