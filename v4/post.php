<?php

require_once "./Employee.php";

$employeeObject = new EmployeeData();
$EmployeeData = $employeeObject->getApiData();

$employeeTitleInput = $argv[1];
$result = [];

foreach ($EmployeeData as $key => $val) {
    if ($val['title'] === $employeeTitleInput) {
        $result = $val;
    }
}

if (count($result) === 0) {
    echo "We don't have any record with name {$employeeTitleInput}";
} else {
    print_r($result);
}


