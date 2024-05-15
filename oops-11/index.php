<?php
require_once "PostgresConnection.php";
require_once "MySqlConnection.php";
require_once "sql/MySqlConnection.php";
require_once "postgres/PostgresConnection.php";

//Rename//
use Mysql\MySqlConnection as PrimaryMySQLConnection;
use SQL\MySQL\MySqlConnection as SecondaryMySQLConnection;

// $mysql = new Mysql\MySqlConnection();
// echo $mysql->connect();
$mysql = new PrimaryMySQLConnection();
echo $mysql->connect();
// echo PHP_EOL;
$postgres = new Postgres\PostgresConnection();
echo $postgres->connect();

// $mysql1 = new SQL\MySQL\MySqlConnection();
// echo $mysql1->connect();
$mysql1 = new SecondaryMySQLConnection();
echo $mysql1->connect();

$postgres1 = new SQL\Postgres\PostgresConnection();
echo $postgres1->connect();