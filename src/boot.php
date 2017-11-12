<?php

include __DIR__ . "/authentication/authentication.php";

session_start();

if (!isset($_SESSION['is_authenticated'])) {
    $_SESSION['is_authenticated'] = false;
}

$db = new PDO("mysql:host=localhost;dbname=fuellog;charset=utf8", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);