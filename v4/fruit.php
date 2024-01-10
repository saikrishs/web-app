<?php

class fruitData
{
public $name;
public $color;

function set_name($name): void
{
 $this -> name = $name;
}
function get_name($name){
    return $this -> $name;
}

}