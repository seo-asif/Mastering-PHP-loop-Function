<?php


$prevNumber = 0;
$currentNumber = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $currentNumber . " ";

    // Calculate the next Fibonacci number
    $nextNumber = $prevNumber + $currentNumber;

    // Check if the next Fibonacci number exceeds 100
    if ($nextNumber > 100) {
        break;
    }

    // Update prevNumber and $currentNumber for the next iteration
    $prevNumber = $currentNumber;
    $currentNumber = $nextNumber;
}

?>