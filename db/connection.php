<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'db_student');
    define('DB_PORT', '3306');

    try{
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    }
    catch(Exception $e){
        die("ERROR: " . mysqli_connect_error() . "<br>" . $e);
    }
?>
