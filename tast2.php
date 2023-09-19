<?php
function skipMultiplesOfFive()
{
    for ($i = 1; $i <= 50; $i++) {

        //check if the number is multiple of 5
        if ($i % 5 == 0) {
            continue;
        }
        echo $i . " ";
    }
}

skipMultiplesOfFive();