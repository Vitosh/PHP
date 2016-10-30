<?php
$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));
$numberThree = intval(fgets(STDIN));

$largestFromOneTwo = $numberOne;

if ($numberTwo > $numberOne){
    $largestFromOneTwo = $numberTwo;
}
if($numberThree > $largestFromOneTwo){
    $largestFromOneTwo = $numberThree;
}

echo "MAX: " . $largestFromOneTwo;