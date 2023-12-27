<?php
$dbhost = 127.0.0.1;
$username = "root";
$password = "root";
$dbName = "Northwind";

try {
    $dbconnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $username,
        $password);
}
