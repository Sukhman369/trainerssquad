<?php
$mysqli = new mysqli('localhost', 'root', 'admin', '', 3302);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
if ($mysqli->query('CREATE DATABASE IF NOT EXISTS trainers_squad')) {
    echo "Database trainers_squad created successfully\n";
} else {
    echo "Error creating database: " . $mysqli->error . "\n";
}
$mysqli->close();
