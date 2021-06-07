<?php
define('PATH',"http://localhost/api_odev/");
session_start();

require_once ('PDOClass.php');

$pdo = new PDO('mysql:dbname=api_odev;host=localhost', 'root', 'root');
$db = new PDODb($pdo);