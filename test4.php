<?php

function generateFibonacci($n)
{
    $prevNumber = 0;
    $currentNumber = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $currentNumber . " ";

        // Calculate the next Fibonacci number
        $next = $prevNumber + $currentNumber;
        
        // Update $prevNumber and $currentNumber for the next iteration
        $prevNumber = $currentNumber;
        $currentNumber = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
generateFibonacci(15);