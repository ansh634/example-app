<?php
function generateFibonacci($n) {
    $fibonacciSequence = [];
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Number of elements in the sequence
$numberOfElements = 10;

// Generate Fibonacci sequence
$fibSequence = generateFibonacci($numberOfElements);

// Output the generated sequence
echo "Fibonacci sequence with $numberOfElements elements: ";
foreach ($fibSequence as $num) {
    echo $num . " ";
}
?>

