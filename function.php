<?php
function caculate($num1, $oper, $num2){
    $sum;
    switch($oper){
        case 'add':
            $sum = $num1 + $num2;
            break;
        case 'subtract':
            $sum = $num1 - $num2;
            break;
        default:
            $sum = 'Error!';
            break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

echo "Value: " . caculate($num01, $oper, $num02);