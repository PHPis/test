<?php

$dsn = "mysql:dbname={$_ENV["MYSQL_DATABASE"]};host={$_ENV["MYSQL_HOST"]};port=3306;charset=utf8";
$user = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}