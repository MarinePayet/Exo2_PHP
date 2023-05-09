<?php

function isPrime($number) {

    for ($i = 2; $i < $number-1; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$count = 0;

$number = 2;

while($count<5) {
    if(isPrime($number)){
        $count++;
        echo $number . "<br>";
    };
    $number++; 

}