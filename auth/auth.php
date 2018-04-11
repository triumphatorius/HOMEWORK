<?php
//Если форма авторизации отправлена...
if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
//Пишем логин и пароль из формы в переменные (для удобства работы):
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    /*
    Формируем и отсылаем SQL запрос:
    ВЫБРАТЬ ИЗ таблицы users2 ГДЕ поле_логин = $login И поле_пароль = $password.
    */
    $mysqli = new mysqli("localhost", "root", "", "auth");
    if (mysqli_connect_errno()) {
        printf("Ошибка соединения: %s\n", mysqli_connect_error());
        exit();
    }

    $query = 'SELECT*FROM users2 WHERE login="' . $login . '" AND password="' . $password . '"';
    $result = mysqli_query($mysqli, $query); //ответ базы запишем в переменную $result.
    $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

    /*$dsn = "mysql:host=localhost;dbname=auth;charset=utf8";
    $dbh = new PDO($dsn, 'root', '');
    $stmt = $dbh->query('SELECT * FROM users2 WHERE login="' . $login . '" AND password="' . $password . '"');
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);*/


//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
    if (!empty($user)) {

//Стартуем сессию:
        session_start();

//Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

//Пишем в сессию логин и пароль пользователя (их мы берем из переменной $user!):
        $_SESSION['login'] = $user['login'];
        $_SESSION['password'] = $user['password'];



        echo 'Верные данные';
    } else {
//Пользователь неверно ввел логин или пароль, выполним какой-то код.
        echo 'Неверные данные';
    }
}

?>
