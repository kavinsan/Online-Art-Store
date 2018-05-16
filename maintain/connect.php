<?php
    
    DEFINE ('DB_USER', 'kthavane');
    DEFINE ('DB_PASSWORD','Igjeteub');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'kthavane');
    
    $dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error () );

    mysqli_set_charset($dbcon, 'utf8');
?>