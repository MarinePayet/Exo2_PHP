<?php

$age = -5;

switch($age){
    case $age >= 18:
        echo "Je suis majeure";
    break;
    case $age <18 && $age>0:
        echo "Je suis mineure";
    break;
    default:
        echo "il y a un problème!";
}
