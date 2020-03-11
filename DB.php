<?php
$host='localhost';
$db='quotes'; //rename this to the associate database name
$user='root'; //same here
$pass=''; //yup, again xD
$charset='utf8mb4';

$dsn='mysql:host=localhost;dbname=quotes;';
$opt=[
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);





























?>
