<?php

$string = "Ceci est une chaîne de caractère.";

$stringExplode = explode(" ", $string);

foreach($stringExplode as $word){
    echo $word . "<br>";
}