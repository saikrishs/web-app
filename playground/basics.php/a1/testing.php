<?php

//Defining functions which return array value
function studentData(): array
{
    return [
        'sai' => [
            'ssc' => 480,
            'inter' => 910,
            'btech' => 640,
            'ms' => 990
        ],
        'vamsi' => [
            'ssc' => 500,
            'inter' => 810,
            'btech' => 680,
            'ms' => 890
        ],
        'gopi' => [
            'ssc' => 550,
            'inter' => 910,
            'btech' => 650,
            'ms' => 880
        ]
    ];
}

//Function which takes name and return SSC score
function getSSCScore($name): int
{
    $result = null;
    $studentData = studentData();
    //Integrating student array
    foreach ($studentData as $key => $value) {
        if ($key === $name) {
            $result = $value ['ssc'];
        }
    }
    return $result;
 }
 $result = getSSCScore('sai');
 echo $result;

 echo '<br>';

//Function which takes name and return Inter score

function getInterScore($name): int
{
  $studentData = studentData();
  foreach ($studentData as $key => $value) {
      if ($key === $name) {
          $result = $value ['inter'];
      }
  }
  return $result;
}
$result = getInterScore('vamsi');
echo $result;

echo '<br>';

//Function which takes name and return BTech score
function getBTechScore($name):int
{
    $result = 'null';
    $studentData = studentData();
    foreach ($studentData as $key =>$value) {
        if ($key===$name){
            $result = $value ['btech'];
        }
    }
return $result;
}
$result = getBTechScore('gopi');
echo $result;

echo '<br>';

//Function which takes name and return MS score
function getMSScore($name):int
{
    $result = 'null';
    $studentData = studentData();
    foreach ($studentData as $key =>$value) {
        if ($key===$name){
            $result = $value ['ms'];
        }
    }
    return $result;
}
$result = getMSScore('sai');
echo $result;