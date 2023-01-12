<?php

    Define('DB_dsn', 'mysql:dbname=id20133177_admin;host=localhost');
    Define('DB_user', 'id20133177_donators');
    Define('DB_password', 'c*>F@9PUfi-7ow_C');
    define('API_KEY', 'sandbox-kdNRCQYVm9c8hTrfxm22dWKFjXTiSKpc');
    define('API_SECRET_KEY', 'sandbox-VBvIrs4scYHbSu0sYHjzNke6Z5Z45t1Z');
    
    $db;
    
        //Establish Database Connection
    try {
    
        $db = new PDO(DB_dsn, DB_user, DB_password);
        
    } catch (PDOException $err) { 
        
        die("Could not connect to database");
        
    }
    
    
    
    
    ?>