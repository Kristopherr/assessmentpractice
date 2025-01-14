<?php


$hn = "localhost";
$un = "Kristopher_Admin";
$pw = "iJ@0joeK2h2A5]f.";
$db = "musicKM";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{ 
    echo 'connection successful';
}

//iJ@0joeK2h2A5]f.  passwerd

?>