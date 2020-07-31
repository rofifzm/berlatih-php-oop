<?php 
require_once("animal.php");
class Ape extends Animal {
    public function yell(){
        echo "Auooo";
    } 
    public function get_legs(){
        echo $this->legs;
    } 
}

?>