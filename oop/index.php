<?php
require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$animal = new animal("Shaun");
echo "name: ". $animal->name . "<br>";
echo "legs : ". $animal->kaki . "<br>";
echo "cold bloded : ". $animal->cold_blood ."<br>";

echo "<br>";

$kodok = new frog("buduk");
echo "name: ". $kodok->name . "<br>";
echo "legs : ". $kodok->kaki . "<br>";
echo "cold bloded : ". $kodok->cold_blood ."<br>";
echo "jump : ";
$kodok->jump();

echo "<br>";
echo "<br>";

$sungokong = new ape("KeraSakti");
echo "name: ". $sungokong->name . "<br>";
echo "legs : ". $sungokong->kaki . "<br>";
echo "cold bloded : ". $sungokong->cold_blood ."<br>";
echo "yell : ";
$sungokong->yell();

echo "<br>";
?>
