<?php
function db_connect()
{
    $servername = "localhost";
    $username = "root";
    // for mac $password = "root";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=voorbeeld",$username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connection geslaagd";
    } catch (PDOException $e){
        echo "Fout bij het maken van de connection: " . $e->getMessage();
    }
    return $conn;
}
// db_connect();