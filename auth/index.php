<?php

//Если форма авторизации отправлена...
if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
    //Пишем логин и пароль из формы в переменные (для удобства работы):
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    /*
        Формируем и отсылаем SQL запрос:
        ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
    */
    $mysqli = new mysqli("localhost", "root", "", "auth");
    if (mysqli_connect_errno()) {
        printf("Ошибка соединения: %s\n", mysqli_connect_error());
        exit();
    }

    $query = 'SELECT*FROM users2 WHERE login="'.$login.'" AND password="'.$password.'"';
    $result = mysqli_query($mysqli, $query); //ответ базы запишем в переменную $result.
    $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

    //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
    if (!empty($user)) {

        //Стартуем сессию:
        session_start();

        //Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        //Пишем в сессию логин и пароль пользователя (их мы берем из переменной $user!):
        $_SESSION['password'] = $user['password'];
        $_SESSION['login'] = $user['login'];

        echo 'Верные данные';
    } else {
        //Пользователь неверно ввел логин или пароль, выполним какой-то код.
        echo 'Неверные данные';
    }
}

?>


<!-- Это форма авторизации: -->
<form action='index.php' method='POST'>
    <input name='login'>
    <input name='password' type='password'>
    <input type='submit' value='Отправить'>
</form>
<!-- Конец формы авторизации. -->

<a href="secret1.php" target="_blank">Стр-1</a><br />
<a href="secret2.php" target="_blank">Стр-2</a><br />
<a href="secret3.php" target="_blank">Стр-3</a><br />

