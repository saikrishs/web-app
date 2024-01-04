<?php

// Defining variable
$dbHost = "127.0.0.1";
$username = "root";
$password = "root";
$dbName = "Northwind";


try {
    $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);

    $sqlQuery = "select * from SalesOrder where employeeId = 5 and shipperid = 2";
    $sqlStatement = $dbConnection->prepare($sqlQuery);
    $sqlStatement->execute();

    $results = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($results);


} catch (\Throwable $e) {
    echo $e->getMessage();
}