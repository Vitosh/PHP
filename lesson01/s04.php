<?php
$largest;
while($number = intval(fgets(STDIN))){
    if (isset($largest)){
        $largest = max($largest, $number);
    }else{
        $largest = $number;
    }
}
echo "MAX is " . $largest;