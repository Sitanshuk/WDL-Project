<?php 
include 'dbconnect.php';
$conn=OpenCon();
$t1=$_GET["u_name"];
$t2=$_GET['u_pass'];
$t3=$_GET['u_email'];
$t4=$_GET['u_contact-no'];
$t5=$_GET['u_address'];
if($conn -> connect_error){
	die("Connection Failed %s\n".$conn -> connect_error);
}
$query = "INSERT INTO customer (cid,bid,name,password,phone_no,email,address) VALUES ('C001','B001','$t1','$t2','$t4','$t3','$t5')";
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
CloseCon($conn);
?>