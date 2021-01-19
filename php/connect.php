<?php
@session_start();

$servername = "localhost";
$username = "id14989488_ctmohale";
$password = "WqFq)gy#7!+{)a8{";
$dbname = "id14989488_labcontrol";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
