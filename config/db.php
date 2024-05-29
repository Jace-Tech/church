<?php 

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB_NAME", "church");


$DSN = "mysql:dbname=" . DB_NAME . ";host" . HOST;
$connect = new PDO($DSN, USER, PASSWORD);

if(!$connect) die("Can't connect to DB");

$connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);