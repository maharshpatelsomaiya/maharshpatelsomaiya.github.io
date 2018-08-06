<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "learnanintern";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$inputtext=$_POST['textinput'];
	$sql = "SELECT * FROM `abstractsub` WHERE `accyear`=".$inputtext."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["fname"]. " - Name: " . $row["email"]. " " . $row["contactno"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();

?>