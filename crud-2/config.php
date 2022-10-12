<?php
$db_name = 'mgcode';
$host_server = 'localhost';
$user_server = 'root';
$pass_server = '';

$pdo = new PDO("mysql:dbname=$db_name;host=$host_server", $user_server);
?>