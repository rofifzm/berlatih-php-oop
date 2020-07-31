<?php
require_once("animal.php");
require_once("Ape.php");
require_once("Frog.php");
echo "Release 0 <br>";
$sheep = new Animal("shaun");
echo "<pre>";
echo $sheep->name; // "shaun" 
echo "<br>";
$sheep->get_legs(); // 2 
echo "<br>";
$sheep->get_cold_blooded(); // false 
echo "<br>";
echo "</pre>"; 
echo "Release 1 <br>";
echo "<pre>";
$sungokong = new Ape("kera sakti");
echo $sungokong->name;
echo "<br>";

$sungokong->yell(); // "Auooo"
echo "<br>";
$sungokong->get_legs();
echo "<br>";

echo "<br>";
$kodok = new Frog("buduk");
echo $kodok->name;
echo "<br>";
$kodok->jump(); // "hop hop" 
echo "<br>";
$kodok->get_legs();

echo "<br>"; 
echo "</pre>"; 

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>