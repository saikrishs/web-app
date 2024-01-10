<?php
require_once "./employee.php";
require_once "./student.php";

 /*$employee = new employee;
 $results = $employee->getMSScore("sai");
 echo $results;*/

$student = new StudentData;
$results = $student->getSSCScore("gopi");
echo $results;
