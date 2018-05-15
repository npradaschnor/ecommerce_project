<?php

// Noa Pereira Prada Schnor. Web Applications Project May 2018. Code to connect to database.


//Settings to view errors
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//Start a session
session_start();

$dbhost_conn = "localhost"; //location: my own machine
$dbuser_conn = "root"; //username: admin
$dbpassword = ""; //password: is empty or blank in this case
$dbname = "teddybear"; //name of the database

$hostname_conn = "localhost"; //location: my own machine
$database_conn = "teddybear"; //name of the database
$username_conn = "root"; //username: admin
$password_conn = ""; //password: is empty or blank in this case

// Connection to MySQL
$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);
if(!$conn) {
   echo "Error connecting to MySQL."; // If there is no connection
   exit;
}
?>
