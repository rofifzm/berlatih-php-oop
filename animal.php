<?php 
class Animal {
  protected $legs=2;
  private $cold_blooded="false";
  public $name;
  public function __construct($name) 
  {
    $this->name= $name;
   
  }  
  public function get_legs(){
      echo $this->legs;
  } 
  public function get_cold_blooded(){
    echo $this->cold_blooded;
}
  

}

?>