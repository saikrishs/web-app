<?php
require_once "./StudentData.php";

$studentObject = new StudentData();
$studentData = $studentObject->getApiData();

$studentNameInput = $argv[1];
$result = [];

foreach($studentData as $key => $val) {
    if ($val['username'] === $studentNameInput) {
        $result = $val;
    }
}

if(count($result) === 0) {
    echo "We don't have any record with name {$studentNameInput}";
} else {
    print_r($result);
}


