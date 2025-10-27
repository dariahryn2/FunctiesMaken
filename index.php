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
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero!";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid operation!";
    }
}


$num1 = getNumber("Enter first number: ");
$operation = getOperation();
$num2 = getNumber("Enter second number: ");

$result = calculate($num1, $num2, $operation);
echo "Result: $result\n";

?>