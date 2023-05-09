<?php

// function fact($n1, $n2){
//     $total = 0;
//     for($i=0; $i<$n2; $i++){
//         $total += $n1;

//     }
//     return $total;
// }

// echo fact(4,5) . "<br>";




function factR($n1, $n2){
    if($n2 === 0){
        return 0;
    } return $n1 + factR($n1, $n2-1);


}


echo factR(4,5);