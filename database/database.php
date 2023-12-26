<?php

$hostname = "localhost";
$database = "marina";
$username = "marina";
$password = "marina";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);
