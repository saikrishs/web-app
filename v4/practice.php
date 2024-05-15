
<?php
/*
 * $name = "Sai";
echo $name;
//echo phpversion();
echo "Hello  world!<br>";
echo "Hello  world!<br>";
Echo "Hello  world!<br>";
$color = "red";
echo "My car is $color<br>";
echo "My car is $Color<br>";
echo "My car is $COLOR<br>";
$x = 5;
var_dump($x);
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$x = 7;
function myTest()
{
    echo "My name is $x";
}
myTest();
echo "My name is $x";


function myTest()
{
    $x = 5;
    echo "My numb in $x";
}
myTest();
echo "My numb out $x";

$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
}

myTest();
echo $y; // outputs 15

$names = array("sai","vamsi");
var_dump($names);

class Car
{
  public $color;
  public $model;

  public function __construct($color, $model)
  {
     $this->color = $color;
     $this->model = $model;
  }
  public function message()
  {
     return "my car is $this->color $this->model";
  }
}

$myCar = new Car("red", "toyato");
var_dump($myCar);


echo __DIR__;
echo "<br";
echo __FILE__;
echo "<br";
echo __FUNCTION__;
$a = 5;
if ($a>3){
    echo"Have a good day!";
}
$a = date("12");
if ($a > 20){
    echo "Have a good day!";
}
else{
    echo "Have a good night";
}
$i = 0;
while ($i < 6){
    if ($i == 3) continue;
    echo $i;
    $i++;
}
*/
//Functions
/*function myMessage()
{
    echo"my name is sai";
}
myMessage();
*/
//Array
/*$cars = array("volvo", "Toyota", "BMW");
$cars[1] = "ford";
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
    echo "$x <br>";
}

$car = array(
    "brand"=>"ford",
    "model"=>"mustang",
    "year"=> 2016
);
var_dump($car);
$car = array(
    "brand"=>"ford",
    "model"=>"mustang",
    "year"=> 2016
);
foreach ($car as $x=>$y){
    echo "$x: $y<br>";
}
*/
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
