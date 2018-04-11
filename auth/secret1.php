<?php
session_start();

if($_SESSION['auth'] !== true)
{
    echo 'Неправильный логин или пароль';
}
/*if(!empty($_SESSION['login']) && !empty($_SESSION['password'])){
    echo 'Неправильный логин или пароль';
//header('Location: на страницу с авторизацией');
    die();
}*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Если ты авторизован то ты меня читаешь</h1>
</body>
</html>