<?php

$age = -5;

if($age >= 18){
    echo "Je suis majeure";
} elseif($age <18 && $age >0){
    echo "Je suis mineure";
} else {
    echo "il y a un problème!";
}