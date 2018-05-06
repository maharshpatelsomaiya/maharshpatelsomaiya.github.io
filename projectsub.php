<?php
    $conn = new mysqli("localhost", "root", "", "learnanintern");
    $fname=$_GET['fname'];
	$sname=$_GET['sname'];
	$tname=$_GET['tname'];
    $femail=$_GET['femail'];
	$semail=$_GET['semail'];
	$temail=$_GET['temail'];
	$telephone1=$_GET['telephone1'];
	$telephone2=$_GET['telephone2'];
	$telephone3=$_GET['telephone3'];
    $prob_stmt=$_GET['prob_stmt'];
	$accyear=$_GET['accyear'];
	$under=$_GET['under'];
    $facname=$_GET['facname'];
	$targetfolder = "testupload/";
    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

    if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO `projectsub` (`fname`, `sname`, `tname`, `femail`, `semail`, `temail`, `telephone1`, `telephone2`, `telephone3`, `prob_stmt`,
	`acc_year`, `under`, `facname`, `file`) VALUES 
								  ('".$fname."',
								   '".$sname."',
								   '".$tname."',
								   '".$femail."',
								   '".$semail."',
								  '".$temail."', 
								  '".$telephone1."',
									'".$telephone2."',
									'".$telephone2."',
									 '".$prob_stmt."',
								  '".$accyear."',
								  '".$under."',
								  '".$facname"',
								  '".$file."' );";
    if ($conn->query($sql) === TRUE) {
    	echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 }
 else {
 
 echo "Problem uploading file";
 
 }

    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
?>
