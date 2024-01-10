<html>
<body>
<h1>The fruit program</h1>
<?php
   class fruit {
       public $name;
       public $color;

       function set_name($name) {
           $this->name = $name;
       }
       function get_name(){
        return $this->name;
       }
   }

   $banana = new fruit();
   $apple = new fruit();
   $banana->set_name('banana');
   $apple->set_name('apple');

   echo $banana->get_name();
   echo "<br>";
   echo $apple->get_name();


?>
</body>
</html>