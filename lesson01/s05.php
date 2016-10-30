<?php
$word = fgets(STDIN);
$my_array = array(strlen($word));

for ($x = 0; $x < strlen($word); $x++){
    $letter = $word[$x];
    if(!array_key_exists($letter,$my_array)){
        $my_array[$letter] = 0;
    }
    $my_array[$letter]++;
}
var_dump($my_array);
