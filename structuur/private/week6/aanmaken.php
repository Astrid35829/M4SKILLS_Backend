<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
$conn = db_connect();

$insertQuery = "INSERT INTO accounts (username) VALUES ('Ayse')";
$conn->exec($insertQuery);





