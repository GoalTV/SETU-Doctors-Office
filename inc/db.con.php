<?php

/**
 *     Database Connection.
 *     Project for South East Technological University
 *     @Janusz Czeropski C00176885@itcarlow.ie 
 *     2023
 */


/* Setting the error reporting to display all errors. */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Setting the timezone to London, and setting the database server, username, password and name. */
date_default_timezone_set('Europe/London');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Scenario1');
 
/* Connecting to the database. */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
