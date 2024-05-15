<?php
require_once "vendor/autoload.php";

use App\Student;
use App\Models\Staff;
// use App\Models\Repos;
use Repos\Role;
use Symfony\Component\VarDumper\VarDumper;

$student = new Student();
$student->printDetails();

$staff = new Staff();
$staff->printDetails();

// $role = new Role();
// $role->printDetails();
$role = new Role();
varDumper::dump($role);
$role->printDetails();