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
	<form action="home.php" method="post" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr>
			 <td align="center">
            <input type="radio" name="useer_Type" value="Handyman" />Handyman
            <input type="radio" name="useer_Type" value="Customer" />Customer
 
            </td>
		</tr>
			
		
		<tr align="center">
			<td colspan="6"><input type="submit" name="register" value="register now"></td>
		</tr>
		
		<tr>
		
  		<td>Already a member? <a href="login.php">Login</a></td>
		</tr>
	
	
	</form>
	</table>
	<?php>
	if(isset($_POST[])){
		$Handyman=$_POST['Handyman'];
		$Customer=$_POST('Customer');
		if($Handyman=='register')
		{
		   include('RegisterHamdyman.php');
		
		}
		else{
			
			include('RegisterCustomer.php')
			
		}
		
	}
	
	<?>
	
	</body>
	</html>
	
	
	
	
	
	
	
	