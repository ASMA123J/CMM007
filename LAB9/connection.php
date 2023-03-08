<?php
$servername = "localhost";
$dbname='db2201532_cmm007';
$username = "2201532";
$password = "2201532";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
 die("Connection failed: " . $db->connect_error);
}

echo "success";
?>