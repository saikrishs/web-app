<?php
 $databaseHost = "127.0.0.1";
 $userName = "root";
 $password = "root";
 $dbName = "Northwind";

 try {
     $dbConnection = new PDO("mysql:host=$databaseHost; dbName=$dbName" , $userName,
         $password);

     $sqlQuery = "select * from Employee";
     $sqlStatement = $dbConnection->prepare($sqlQuery);
     $sqlStatement->execute();

     $results = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);
     print_r($results);

 } catch (\Throwable $th) {
     echo $th->getMessage();
 }
