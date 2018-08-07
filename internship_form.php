<?php
    $conn = new mysqli("localhost", "root", "", "learnanintern");
    $fname=$_GET['fname'];
	$phno=$_GET['phno'];
	$emailid=$_GET['emailid'];
    $internship_type=$_GET['internship_type'];
	$internship_no=$_GET['internship_no'];
	$Domain=$_GET['Domain'];
	$who_can_apply=$_GET['who_can_apply'];
	$internship_stmt=$_GET['internship_stmt'];
	$Perks=$_GET['Perks'];
    if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO `internship_form` (`fname`, `phno`, `emailid`, `internship_type`, `internship_no`, `Domain`, `who_can_apply`, `internship_stmt`, `Perks`) VALUES         		('".$fname."',
								  '".$phno."',
								  '".$emailid."',
								  '".$internship_type."',
								  '".$internship_no."',
								  '".$Domain."', 
								  '".$who_can_apply."', 
								  '".$internship_stmt."', 
								  '".$Perks."'
								  );";
    if ($conn->query($sql) === TRUE) {
echo "
<script>
alert('Your internship proposal has been submitted successfully, you are being redirected to the View Project page');
window.location.href='viewsub.html';
</script>";
    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
?>
