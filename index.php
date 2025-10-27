<?php
// functies toevoegen

function getNumber($prompt) {
    return (float)readline($prompt);
}

function getOperation() {
    $operation = readline("Enter operation (+, -, *, /): ");
    return $operation;
}

function calculate($num1, $num2, $operation) {
    if ($operation == "+") {
        $result = $num1 + $num2;
    } elseif ($operation == "-") {
        $result = $num1 - $num2;
    } elseif ($operation == "*") {
        $result = $num1 * $num2;
    } elseif ($operation == "/") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Error: Division by zero!";
        }
    } else {
        $result = "Invalid operation!";
    }
    return $result;
}


$num1 = getNumber("Enter first number: ");
$operation = getOperation();
$num2 = getNumber("Enter second number: ");

$result = calculate($num1, $num2, $operation);
echo "Result: $result\n";

?>