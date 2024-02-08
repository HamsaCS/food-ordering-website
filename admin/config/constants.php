<?php
    //start session
    session_start();


// cre((ate constants to store  Non Repeating Values
define('SITEURL','http://127.0.0.1:5500/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');

$conn = mysqli_connect(LOCALHOST,DB_NAME,DB_PASSWORD) or die(mysqli_error()); //database connection
$db_select=mysqli_select_db($conn,'food-order') or die(mysqli_error());


?>