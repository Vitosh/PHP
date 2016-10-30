<?php
if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];
    $output = "";

    if ($operation == "sum") {
        $output =  ($numberOne + $numberTwo);
    } else if ($operation == "substract") {
        $output = ($numberOne - $numberTwo);
    } else {
        $output = " == Wrong operation";
    }
}

include 'calculator_frontend.php';