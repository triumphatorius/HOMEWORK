<?php
require "config_db.php";
require "connect_db.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}