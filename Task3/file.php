<?php
if (isset($_POST["calc"])) {

    $number1 = $_POST["Num1"];
    $number2 = $_POST["Num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        $result = $number1 + $number2;
    } elseif ($op == "-") {
        $result = $number1 - $number2;
    } elseif ($op == "*") {
        $result = $number1 * $number2;
    } elseif ($op == "/") {
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = "Error: division by zero";
        }
    }

    echo "<h3>Result: $result</h3>";
}
?>