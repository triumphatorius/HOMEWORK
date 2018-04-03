<?php
require "connect_db.php"; // сдесь подключение к базе данных

if(
    !empty($_POST['login'])
    && !empty($_POST['password'])
    && !empty($_POST['password_confirm'])
    && !empty($_POST['firstname'])
    && !empty($_POST['age'])
    && !empty($_POST['description'])
    //&& !empty($_POST['photo'])
)
{
    $stmt = $dbh->prepare(
        "INSERT INTO dz_5 (login, password, password_confirm, firstname, age, description, photo) 
VALUES (:login, :password, :password_confirm, :firstname, :age, :description, :photo)"
    );

    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':password_confirm', $password_confirm);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':photo', $photo);

//Пишем данные ввода из формы в переменные
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);//хэшируем пароль
    $password_confirm = password_hash($_POST['password_confirm'], PASSWORD_DEFAULT);//хэшируем пароль
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $photo = $_POST['photo'];

    //проверям не уникальность логина
    $data = $dbh->prepare("SELECT COUNT(*) FROM dz_5 WHERE login = ?");
    $data->execute([$_POST['login']]);
    $count = $data->fetch(PDO::FETCH_NUM)[0];
    if ($count[0] !== '0') {
        echo '<h3>Введённый логин уже занят. - <a href="reg.php">Попробуете ещё раз</a></h3>';
        die;
    }

    // проверка совпадений паролей
    if ($_POST['password'] !== $_POST['password_confirm']) {
        echo '<h3>Введённые пароли не совпадают. - <a href="reg.php">Попробуете ещё раз</a></h3>';
        die;
    }

    $stmt->execute();
    echo '<h3 class=" my-color form-container form-group col-sm-2">Регистрация прошла успешно</h3>';

    /*/*Получение расширенной информации об ошибке,
     произошедшей в результате работы объекта PDOStatement*/
    /*echo "\nPDOStatement::errorInfo():\n";
    $arr = $stmt->errorInfo();
    print_r($arr);*/

}else{
    echo '<h3 class=" my-color form-container form-group col-sm-2">Заполните все поля! </h3>';
}
