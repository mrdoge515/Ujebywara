<?php
include("./pages/base.php");

// Connect to database
$connection = new mysqli($servername, $username, $password, $database);

// Make query and execute
$query = "SELECT link FROM links WHERE token = '" . $token . "'";
$result = $connection -> query($query);

// Disconnect from db
$connection->close();

// Get link based on token
$result = $result -> fetch_assoc();

// Redirect to destination site
header('Location: ' . $result["link"]);
?>