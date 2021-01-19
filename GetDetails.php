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
        echo "errror cennecting";
    }
else
{
    
}
    $sql = "SELECT * FROM users WHERE pass ='".$loginUser."'";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {

    	while($row = $result->fetch_assoc())
    	{
    		echo$row["name"]." :\t\t".$row["surname"]." :\t\t ".$row["campus"];
    	}
    }
    else 
    {
    	echo "data not found";
    }
    $conn->close();
?>