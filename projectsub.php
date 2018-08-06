<?php
    $conn = new mysqli("localhost", "root", "", "example");
    $fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$tname=$_POST['tname'];
    $femail=$_POST['femail'];
	$semail=$_POST['semail'];
	$temail=$_POST['temail'];
	$telephone1=$_POST['telephone1'];
	$telephone2=$_POST['telephone2'];
	$telephone3=$_POST['telephone3'];
    $prob_stmt=$_POST['prob_stmt'];
	$accyear=$_POST['accyear'];
	$under=$_POST['under'];
    $facname=$_POST['facname'];
    $targetfolder = "testupload/";
    $targetfile=basename( $_FILES["file"]["name"]);
    $tmp=basename( $_FILES["file"]["tmp_name"]); 
    $targetfolder=$targetfolder.$targetfile;
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
								  '".$facname."',
								  '".$targetfolder.$targetfile."' );";
    if ($conn->query($sql) === TRUE) {
    	echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfolder))
 {
 echo "The file ". basename( $_FILES['file']['name']). " is uploaded".$targetfolder;
 }
 else {
 
 echo "Problem uploading file";
 
 }

    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
?>
