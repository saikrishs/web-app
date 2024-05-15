<?php
// // require_once("./Product.php");
// require_once("./Student.php");
 require_once("./Myinfo.php");
// $firstName = "sai";
// $lastName = "srungavarapu";
// $address= ["street"=>"bodawada", "city"=>"parchur", "state"=> "Ap", "pincode"=>523169];

// $student = new Student($firstName, $lastName, $address);
// $add= $student->getAddress();
// print_r($add["pincode"]);

// $name = "sai";
// $age = 28;
// $studentInfo = ["sai", "28", "bodawada"];
// $studentInfo1 = ["name"=>"sai", "age"=> 28, "Address"=>"bodawada"];
// $studentInfo1["gender"]= "male";

// $mydetails = new stdClass;
// $mydetails->name = "sai";
// $mydetails->age = 28;
// $mydetails->gender = "male";
// $mydetails->Address = "Texas";

// echo $name;
// echo PHP_EOL;
// echo $age;
// echo PHP_EOL;
// var_dump($studentInfo);
// echo PHP_EOL;
// var_dump($studentInfo1["age"]);
// echo PHP_EOL;
// var_dump($studentInfo1["age"]);
// echo PHP_EOL;
// var_dump($mydetails);

$myinfo = new Myinfo();
$myinfo->address = ["street"=>"stoneHollowDrive", "city"=> "Austin", "state"=> "Tx", "Pincode"=> 78758];
Print_r($myinfo);