<?php
include 'dbconnect.php';
 
$conn = OpenCon();
 
$city= $_POST['city'];
$service = $_POST['service'];
$mobile = $_POST['mobile'];
echo $city;

if(!$conn)
{
	die('Could not connect:'. mysql_error());
}
mysqli_select_db($conn, "snv");

$sql="INSERT INTO 'odr' ('oid','bid','sid','phone_no')

VALUES ('0001','$city','$service','$mobile')";
/*
$sql = "INSERT INTO `order`(`oid`, `bid`, `sid`, `phone_no`) VALUES ([value-1],[value-2],[value-3],[value-4])"
*/
 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
CloseCon($conn);
?>
