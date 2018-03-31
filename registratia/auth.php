<?php
require "connect_db.php"; // сдесь подключение к базе данных
require "reg.php";//сдесь html форма для регистраций

$stmt = $dbh->prepare(
"INSERT INTO dz_5 (login, password,password_confirm, firstname, age, description) 
VALUES (:login, :password, :password_confirm, :firstname, :age, :description)"
);

$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);

//Пишем данные ввода из формы в переменные
$login= $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$name = $_POST['name'];
$age = $_POST['age'];
$description = $_POST['description'];

$stmt->execute();