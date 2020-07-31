<?php 
require_once("animal.php");
class Frog extends Animal {
    protected $legs=4;
    public function jump(){
       echo "hop hop";
    } 
    public function get_legs(){
        echo $this->legs;
    } 
}

?>