<?php

session_start();

require_once ('PDOClass.php');

$pdo = new PDO('mysql:dbname=api_odev;host=localhost', 'root', 'root');
$db = new PDODb($pdo);

$db->where("id", 1);
$set = $db->getOne("settings");

define('PATH',$set['site_url']);

