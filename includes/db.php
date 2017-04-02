<?php


/**
 * Create constants to pass to connection string as arguments
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "PHP_CMS_ITERATION_001";

foreach($db as $key => $value) {
    
    define(strtoupper($key), $value);
    
    
}

/**
 * 
 * Connection
 * 
 */

$connection =
mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($connection) {
    
    echo "We are connected";
    
}





?>