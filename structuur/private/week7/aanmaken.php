<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
$conn = db_connect();

$insertQuery = "INSERT INTO accounts (username) VALUES ('Ayse')";
$conn->exec($insertQuery);

$insertQuery = "INSERT INTO accounts (email) VALUES ('meep@gmail.com')";
$conn->exec($insertQuery);

echo 'Gegevens uitlezen' . '</br>';

$selectVoorbeeld = "SELECT username FROM accounts";
$results = $conn->query($selectVoorbeeld);
$results->setFetchMode(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "Paginanaam {$row['username']}</br>";
}

echo 'Gegevens wijzigen' . '</br>';

$updateQuery = "UPDATE accounts SET email = 'meep@outlook.com' WHERE id=7";
$conn->exec($updateQuery);