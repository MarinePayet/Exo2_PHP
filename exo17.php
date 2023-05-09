<?php

function pyramid($n){
    for($a=1;$a<=$n;$a++) 
    {
        for ($b=0;$b<$a;$b++){
            echo $a;
        }
        echo "<br>";
    }
}

echo pyramid(10);