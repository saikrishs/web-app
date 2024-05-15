<?php
require_once "./employee.php";
require_once "./Student.php";

 /*$employee = new employee;
 $results = $employee->getMSScore("sai");
 echo $results;*/

$student = new Student();
$results = $student->getMsScore("sai");
echo $results;
