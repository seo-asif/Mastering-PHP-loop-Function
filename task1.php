<?php
//using loop function
function printAllEvenNumbersLoop($startNumber, $endNumber, $steps = 2)
{
    echo "Using loop : ";
    //check if the $startNumber is even 
    if ($startNumber % 2 != 0) {

        for ($i = $startNumber + 1; $i <= $endNumber; $i += $steps) {

            echo $i . " ";
        }
    } else if ($startNumber % 2 == 0) {
        for ($i = $startNumber; $i <= $endNumber; $i += $steps) {
            echo $i . " ";
        }

    }
    echo "\n";
}

printAllEvenNumbersLoop(1, 20, 2);


//using while loop 
function printAllEvenNumbersWhile($startNumber, $endNumber, $steps)
{
    echo "Using while loop : ";
    while ($startNumber <= $endNumber) {
        if ($startNumber % 2 != 0) {
            $i = $startNumber + 1;
            echo $i . " ";
            $startNumber += $steps;

        } else if ($startNumber % 2 == 0) {
            echo $startNumber . " ";
            $startNumber += $steps;
        }
    }
    ;
    echo "\n";
}

printAllEvenNumbersWhile(1, 20, 2);


//using do-while loop
function printAllEvenNumbersDoWhile($startNumber, $endNumber, $steps)
{
    echo "Using do while loop : ";
    do {
        if ($startNumber % 2 == 0) {
            echo $startNumber . " ";
        } else {
            $startNumber += 1;
            echo $startNumber . " ";
        }
        $startNumber += $steps;
    } while ($startNumber <= $endNumber);
}

printAllEvenNumbersDoWhile(1, 20, 2);