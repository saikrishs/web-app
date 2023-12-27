<?php

require_once "./Consumer.php";

$dbHost = "127.0.0.1";
$username = "root";
$password = "root";
$dbName = "Northwind";

try {
    $dbConnection = new PDO("mysql:host=$dbHost; dbname=$dbName", $username,
        $password);

    $sqlQuery = "select * from Employee";
    $sqlStatement = $dbConnection->prepare($sqlQuery);
    $sqlStatement->execute();

    $results = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);
    print_r($results);

} catch (\Throwable $th) {
    echo $th->getMessage();
    echo $th->getLine();
}



$consumerObject = new Consumer("sai", "srungavarapu");
$firstName = $consumerObject->getFirstName();
$lastName = $consumerObject->getLastName();
echo $firstName ." ". $lastName;
