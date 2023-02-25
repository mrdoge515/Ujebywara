<?php
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= $characters[rand(0, $charactersLength - 1)];
    }

    return $result;
}

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "ujebywara";
?>