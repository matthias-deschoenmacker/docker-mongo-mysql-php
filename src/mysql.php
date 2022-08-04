<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$hostname	= "mysql";
$dbname		= "eventsourcing";
$username	= "eventsourcing";
$password	= "root";

try {

    $conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );

    // Configure PDO error mode
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    echo "Connected successfully";
}
catch( PDOException $e ) {

    echo "Failed to connect: " . $e->getMessage();
}

// Perform database operations

// Close the connection
$conn = null;
