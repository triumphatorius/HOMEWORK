<?php

$mysqli = new mysqli("localhost", "root", "", "auth");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}

//Если форма регистрации отправлена и ВСЕ поля непустые...
if (
    !empty($_REQUEST['login'])
    && !empty($_REQUEST['password'])
    && !empty($_REQUEST['password_confirm'])
) {
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $password_confirm = $_REQUEST['password_confirm']; //подтверждение пароля

    //Если пароль и его подтверждение совпадают...
    if ($password == $password_confirm) {
        /*Формируем и отсылаем SQL запрос:
		ВСТАВИТЬ В таблицу_users УСТАНОВИТЬ логин = $login И пароль = $password*/

        $qwery = 'INSERT INTO users SET login="' . $login . '", password="' . $password . '" ';
        $mysqli_qwery($link, $qwery);

        //Выведем сообщение об успешной регистрации:
        echo 'Вы успешно зарегистрированы!';
    } else { //Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
        echo 'Пароли не совпадают!';
    }

} else { //Не заполнено какого-либо из полей...
    echo 'Поля не могут быть пустыми!';
}



