<?php

$link = new mysqli("localhost", "root", "", "auth");

if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}

//Не заполнено какого-либо из полей...
if (empty($_REQUEST['login']) || empty($_REQUEST['password']) || empty($_REQUEST['password_confirm'])) {
    echo 'Поля не могут быть пустыми!';
    return null;
}

$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$password_confirm = $_REQUEST['password_confirm']; //подтверждение пароля

//Если пароль и его подтверждение совпадают...
if ($password != $password_confirm) {
    echo 'Пароли не совпадают!';
    return null;
}

/*
 * Формируем и отсылаем SQL запрос:
 * ВСТАВИТЬ В таблицу_users УСТАНОВИТЬ логин = $login И пароль = $password
 */

$query = 'INSERT INTO users SET login="' . $login . '", password="' . $password . '" ';
mysqli_query($link, $query);

//Выведем сообщение об успешной регистрации:
echo 'Вы успешно зарегистрированы!';