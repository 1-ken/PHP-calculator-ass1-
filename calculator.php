<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $value1 + $value2;
            break;
        case 'subtract':
            $result = $value1 - $value2;
            break;
        case 'multiply':
            $result = $value1 * $value2;
            break;
        case 'divide':
            if ($value2 != 0) {
                $result = $value1 / $value2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        case 'exponent':
            $result = pow($value1, $value2);
            break;
        case 'percentage':
            $result = ($value1 / 100) * $value2;
            break;
        case 'sqrt':
            if ($value1 >= 0) {
                $result = sqrt($value1);
            } else {
                $result = 'Error: Negative value';
            }
            break;
        case 'log':
            if ($value1 > 0) {
                $result = log($value1);
            } else {
                $result = 'Error: Non-positive value';
            }
            break;
        default:
            $result = 'Invalid operation';
            break;
    }

    header("Location: index.php?result=$result");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
