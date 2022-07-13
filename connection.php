<?php
  
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'login_app';
 
try { //PDO is instead of raw SQL queries, exits stream 
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOEXCEPTION $e){
    echo $e->getMessage(); //display connection errors right away if try fails
}


