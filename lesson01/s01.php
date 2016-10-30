<?php
$operation = $argv[1];
$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if ($operation == "multiply") {
echo " == " . ($numberOne * $numberTwo);
}else if ($operation == "divide"){
echo " == " . ($numberOne / $numberTwo);
}
else{
echo " == Wrong operation";
}
?>