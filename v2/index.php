<?php

require_once "./DatabaseConnection.php";
require_once "./OutputFormatter.php";

$databaseConnection = new DatabaseConnection(
    "127.0.0.1",
    "root",
    "root",
    "Northwind"
);

$sqlQuery = "SELECT * FROM Employee";
$results = $databaseConnection->executeQuery($sqlQuery);

OutputFormatter::printResults($results);