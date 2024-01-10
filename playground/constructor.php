<html>
<body>
<?php
    class fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color =$color;
        }
        /*function get_name() {
            return$this->name;
        }
        function get_color() {
            return$this->color;
        }*/
        function __destruct(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";

        }
    }
    $strawberry = new fruit("strawberry","pink");
    ?>
</body>
</html>