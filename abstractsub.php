<?php
    $conn = new mysqli("localhost", "root", "", "learnanintern");
    $fname=$_GET['fname'];
	$sname=$_GET['sname'];
	$tname=$_GET['tname'];
    $femail=$_GET['femail'];
	$semail=$_GET['semail'];
	$temail=$_GET['temail'];
	$fcontactno=$_GET['fcontactno'];
	$scontactno=$_GET['scontactno'];
	$tcontactno=$_GET['tcontactno'];
    $accyear=$_GET['accyear'];
	$under=$_GET['under'];
    $prob_stmt=$_GET['prob_stmt'];
	$domain=$_GET['domain'];
	$abs=$_GET['abs'];
    if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO `abstractsub` (`fname`, `sname`, `tname`, `femail`, `semail`, `temail`, `fcontactno`, `scontactno`, `tcontactno`,`accyear`, `under`, `prob_stmt`,`domain`, `abs`) VALUES ('".$fname."',
								'".$sname."',
								'".$tname."',
								  '".$femail."',
								  '".$semail."',
								  '".$temail."',
								  '".$fcontactno."', 
								  '".$scontactno."', 
								  '".$tcontactno."', 
								  '".$accyear."',
								  '".$under."',
								  '".$prob_stmt."',
								  '".$domain."',
								  '".$abs."' );";
    if ($conn->query($sql) === TRUE) {
echo "<script>
alert('Your abstract has been submitted successfully, you can now verify the same on the view project page');
window.location.href='viewsub.html';
</script>";
    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
?>
