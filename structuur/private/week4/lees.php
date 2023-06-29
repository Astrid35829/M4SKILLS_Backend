<?php
include_once "connect.php";

$pdo = db_connect();
$sql = '
SELECT * FROM accounts
';

foreach($pdo->query($sql) as $row){
    echo $row['username'],'
    <br>
    ';
}