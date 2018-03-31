<?php
require "connect_db.php"; // сдесь подключение к базе данных
require "reg.php";//сдесь html форма для регистраций

$stmt = $dbh->prepare(
"INSERT INTO dz_5 (login, password,password_confirm, firstname, age, description,photo_name) 
VALUES (:login, :password, :password_confirm, :firstname, :age, :description, :photo_name)"
);

$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':password_confirm', $password_confirm);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':photo_name', $photo_name);

//Пишем данные ввода из формы в переменные
$login= $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$name = $_POST['firstname'];
$age = $_POST['age'];
$description = $_POST['description'];
$photo_name = $_POST['photo_name'];

var_dump($stmt);
//$stmt->execute();