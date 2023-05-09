<?php


function factRecursive(int $n){
    if($n === 0){
        return 1;
    }
    return $n*(factRecursive($n-1));
}

echo factRecursive(5);