<?php

require_once "./student.php";

$student = new StudentData;

$result = $student->getMSScore('sai');

echo $result;