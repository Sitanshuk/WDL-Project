<?php
session_start();


if(!$_SESSION['handyman_email']){
	header("location:login.php");
}
else{
	
	
 // ?>	
	
	
	
	




<html>
	<head>
		<title>Customer Form</title>
		</head>
<style>
body{
	border: 10px double black;
	padding:0;
	margin:0;
	background:skyblue;
	
	
}
table{
	color:white;
	padding:10px;
	width:400px;
	height:600px;
}
input{
	padding:5px;
}



</style>
<body>
	<form action="CustomerHome.php" method="POST" enctype="multipart/form-data">
	<table align="center" bgcolor="orange" >
	<tr>
	<td>
	<?php
echo "Hello   " . $_SESSION['handyman_email'];
echo "Welcome!";
?>
</td>
	</tr>
		<tr align="center">
			<td colspan="6">
			<h2></h2></td>
		</tr>
			
		<tr>
			<td align="left"><a href="Order.php">Place an order</a></td>
		</tr>
		<tr>
			<td align="left"><a href="History.php">Show History</a></td>
			
			
		</tr>
	
	</form>
	</table>
	</html>
	
<?php
}
?>