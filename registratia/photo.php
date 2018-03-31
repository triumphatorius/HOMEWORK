<form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="picture">
    <input type="submit" value="Загрузить">
</form>

<?php
$path = 'photos/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
        echo 'Что-то пошло не так';
    else
        echo 'Загрузка удачна';

}