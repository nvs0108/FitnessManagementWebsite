<?php
include_once 'psl-config.php';

// Read database credentials from environment variables
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');
$db_port = getenv('DB_PORT') ?: 3306;

// Create MySQL connection
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

// Check connection
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}
?>
