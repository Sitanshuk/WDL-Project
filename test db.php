<?php
include 'dbconnect.php';
 
$conn = OpenCon();
 
$city= $_POST['city'];
$service = $_POST['service'];
$mobile = $_POST['mobile'];

if($conn-> connect_error) {
	die ("connection failed".$conn->connect_error);
}

$sql="INSERT INTO ordr (oid,bid,sid,phone_no)

VALUES ('0001','$city','$service','$mobile')";

if($conn->query($sql)==TRUE){
	echo "Inserted successfully";
}
else{
	echo "Error" . $sql. "<br" . $conn-> error;
}

CloseCon($conn);
?>
