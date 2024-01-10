<?php

class DatabaseConnection
{

    private $dbHost;
    private $username;
    private $password;
    private $dbName;
    private $dbConnection;

    public function __construct($dbHost, $username, $password, $dbName)
    {
        $this->dbHost = $dbHost;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
    }

    public function executeQuery($sqlQuery)
    {
        try {
            $sqlStatement = $this->dbConnection->prepare($sqlQuery);
            $sqlStatement->execute();

            return $sqlStatement->fetchAll(PDO::FETCH_ASSOC);

        } catch (\Throwable $th) {
            echo $th->getMessage();
            echo $th->getLine();
        }
    }
}
