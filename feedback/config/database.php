<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mykel');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');


// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


// Check the connection
if ($connection->connect_error) {
    die('Connection error: ' . $connection->connect_error);
}