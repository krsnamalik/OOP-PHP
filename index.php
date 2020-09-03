<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal('Shaun', 2, 'false');
$sungokong = new Ape('Kerasakti', 2, 'Auooo');
$kodok = new Frog('Buduk',4,'hop hop');

echo $sheep->name;
echo "<br>";
echo $sheep->legs;
echo "<br>";
echo $sheep->cold_blooded;
echo "<br>";
echo "<br>";
echo $sungokong->name;
echo "<br>";
echo $sungokong->legs;
echo "<br>";
echo $sungokong->yell;
echo "<br>";
echo "<br>";
echo $kodok->name;
echo "<br>";
echo $kodok->legs;
echo "<br>";
echo $kodok->jump;
echo "<br>";
?>