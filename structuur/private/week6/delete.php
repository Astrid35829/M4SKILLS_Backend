<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens verwijderen' . '</br>';
$conn = db_connect();

$deleteQuery = "DELETE FROM accounts WHERE id=5";
$conn->exec($deleteQuery);





