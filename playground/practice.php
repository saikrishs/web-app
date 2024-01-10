<?php
$dbHost = "127.0.0.1";
$userName = "root";
$password = "root";
$dbName = "Northwind";


try {
    $dbConn = new PDO("mysql:host=$dbHost; dbName=$dbName", $userName,
        $password);
    $sqlQuery = "select * from Customer";
    $sqlStatement = $dbConn->prepare($sqlQuery);
    $sqlStatement->execute();
    $results = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);
    print_r($results);

} catch (\Throwable $th) {
    echo$th->getMessage();
}

