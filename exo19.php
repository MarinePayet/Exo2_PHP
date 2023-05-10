<?php


function factR($n1, $n2){
    if($n2 === 0){
        return 0;
    } return $n1 + factR($n1, $n2-1);


}


echo factR(4,5);