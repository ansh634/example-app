<?php
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example values
$num1 = 5;
$num2 = 10;

echo "Before swapping: num1 = $num1, num2 = $num2\n";

// Swap the numbers
swapNumbers($num1, $num2);

echo "After swapping: num1 = $num1, num2 = $num2\n";
?>
