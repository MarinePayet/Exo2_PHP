<?php


function search(array $a, int $element){ 
    return array_search($element, $a);
}

$a = [4, 3, 2, 1, 5];

echo "Search : " . search($a, 1) . "<br/>";




function search2(array $a, int $element){
    
    if(empty($a)){
        return -1;
    }
    $key = array_key_first($a);
    if($a[$key] === $element){
        return $key;
    }
    unset($a[$key]);
    return search($a, $element);
}

$a = [4, 3, 2, 1, 5];


echo "Search : " . search2($a, 5) . "<br/>";