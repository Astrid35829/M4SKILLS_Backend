<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens wijzigen' . '</br>';
$conn = db_connect();

$updateQuery = "UPDATE accounts SET username = 'Fin' WHERE id=5";
$conn->exec($updateQuery);





