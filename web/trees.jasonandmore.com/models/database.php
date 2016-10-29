<?php
    $dsn='mysql:host=mysql.jasonandmore.com;dbname=trees_information_db';
    $username = 'jasonandmorecom';
    $password = 'STx9VCe2';
    
    
    
  
     global $dsn, $username, $password;
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
   }
 
?>