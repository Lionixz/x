<?php
$host = "localhost";
$dbname = "x";
$username = "root";
$password = "";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");
return $mysqli;
