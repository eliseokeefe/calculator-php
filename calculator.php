<?php
if (isset($_GET['math'], $_GET['number1'], $_GET['number2'])) {
    $x = $_GET['number1'];
    $y = $_GET['number2'];
    $op = $_GET['math'];

    if (is_numeric($x) && is_numeric($y)) {
        switch ($op) {
            case 'addition':
                $result = $x + $y;
                break;
            case 'subtraction':
                $result = $x - $y;
                break;
            case 'multiplication':
                $result = $x * $y;
                break;
            case 'division':
                $result = ($y != 0) ? $x / $y : "Division by zero error!";
                break;
            default:
                $result = "Invalid operation.";
        }
        echo is_numeric($result) ? (float)$result : $result;
    } else {
        echo "Can only do math for real numbers :/";
    }
} else {
    echo "Missing required parameters.";
}

 