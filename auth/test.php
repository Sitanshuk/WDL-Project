<html>
	<head>
		<title>Registration Form</title>
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
	height:200;
}
input{
	padding:5px;
}


</style>
<body>
	<form action="insert.php" method="GET" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr>
			 <td align="center">
            <input type="radio" name="radio" value="Handyman" />Handyman
            <input type="radio" name="radio" value="Customer" />Customer
 
            </td>
			<td colspan="6"><input type="submit" name="register" value="register now"></td>
		</tr>
			<hr>
			</hr>
		
		
		<tr>
		
  		<td>Already a member? <a href="login.php">Login</a></td>
		</tr>
		<tr><td><hr></td></tr>
		
	<tr>
	<td>
	
		<?php
	if(isset($_GET['register'])){
		$UserType=$_GET['radio'];
		
		if($UserType=="Handyman")
		{
		 include('RegisterHandyman.php');
		
		}
		else{
			
		include('RegisterCustomer.php');
			
		}
		
	}
	
	?>
	
	

</td>
	
	</tr>
	
	</form>
	</table>
	
	</body>
	</html>
	
	
	
	
	
	
	
	