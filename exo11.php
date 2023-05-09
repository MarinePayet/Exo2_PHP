
<form action="#" method="GET">
    <input type="text" name="name" placeholder="What's your name?">
    <input type="submit" value="Envoyez">
</form>

<?php 

if($_GET){
    echo $_GET['name']; 
}