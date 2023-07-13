<?php 
    // DB credentials.
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','123456');
    define('DB_NAME','hbmsdb');
    // Establish database connection.
    try {
        $dbh = new PDO("mysql:host=localhost; port=3306; dbname=hbmsdb", "root", "123456"); // array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>