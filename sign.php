<?php
/* Database connection settings */
$servername = "localhost";
$username = "id14989488_ctmohale";
$password = "WqFq)gy#7!+{)a8{";
$dbname = "id14989488_labcontrol";

    $loginUser = $_POST["loginUser"];
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT pass FROM users WHERE pass ='".$loginUser."'";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
    	while($row = $result->fetch_assoc())
    	{
    		if($row["pass"]== $loginUser)
    		{
    			echo "Log in success";
    		}
    		else
    		{
    			echo "wrong credentials";
    		}
    	}
    }
    else 
    {
    	echo "wrong credentials";
    }
    $conn->close();
?>