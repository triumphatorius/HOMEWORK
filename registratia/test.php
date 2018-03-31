<form action="test.php" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit">
</form>

<?php
require "connect_db.php"; // сдесь подключение к базе данных

$stmt = $dbh->prepare(
    "INSERT INTO dz_5 (login, password) 
VALUES (:login, :password)"
);

$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);
//Пишем логин и пароль из формы в переменные
$login= $_POST['login'];
$password = $_POST['password'];

$stmt->execute();