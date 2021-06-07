<?php
define('PATH',"http://localhost/api_odev/");
session_start();


define('LOCALHOST','localhost');
define('DB_kullaniciadi','root');
define('DB_sifre','root');
define('DB_tabloismi','api_odev');

$conn = mysqli_connect(LOCALHOST, DB_kullaniciadi, DB_sifre) or die(mysqli_error());
$db_select = mysqli_select_db($conn, DB_tabloismi) or die(mysqli_error());

