<?php

echo "Hello World !";


$movies = [ "Amélie Poulain", "Love Actually", "The Holiday", "6ème Sens", "Fight Club"];

foreach($movies as $movie){
    
    ?> 
    <ul>
        <li><?php echo $movie ?></li>
    </ul>
    

<?php };



