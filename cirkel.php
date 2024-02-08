<?php

$pi = pi();

echo "Wat is de diameter van de cirkel?" . PHP_EOL;
$diameter = readline();

$straal = $diameter / 2;
$omtrek = $pi * $diameter;
$oppervlakte = ($straal * $straal) * $pi;

echo "Oppervlakte = " . $oppervlakte . PHP_EOL;
echo "Omtrek = " . $omtrek . PHP_EOL;

?>