<?php
$host = '127.0.0.1';
$db= 'genshin_va_vf';
$user = 'GOD';
$pass = 'Martin2608*';
$port = 3306;
$charset = 'utf8mb4' ;

$dsn = "mysql:host=$host; dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn, $user, $pass);
