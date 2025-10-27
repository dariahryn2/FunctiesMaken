<?php
// Simple Calculator
echo "Simple Calculator\n";

// Get user inputs
$num1 = (float)readline("Enter first number: ");
$operation = readline("Enter operation (+, -, *, /): ");
$num2 = (float)readline("Enter second number: ");

// Perform operation
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

// Display result
echo "Result: $result\n";
?>