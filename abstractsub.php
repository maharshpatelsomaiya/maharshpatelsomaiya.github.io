<?php
    $conn = new mysqli("localhost", "root", "", "learnanintern");
    $fname=$_GET['fname'];
    $email=$_GET['email'];
	$contactno=$_GET['contactno'];
    $accyear=$_GET['accyear'];
	$under=$_GET['under'];
    $prob_stmt=$_GET['prob_stmt'];
	$abs=$_GET['abs'];
    if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO `abstractsub` (`fname`, `email`, `contactno`, `accyear`, `under`, `prob_stmt`, `abs`) VALUES ('".$fname."',
								  '".$email."', 
								  '".$contactno."', 
								  '".$accyear."',
								  '".$under."',
								  '".$prob_stmt."',
								  '".$abs."' );";
    if ($conn->query($sql) === TRUE) {
    	echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
?>
