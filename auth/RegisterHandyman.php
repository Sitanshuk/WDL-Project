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
	height:600px;
}
input{
	padding:5px;
}



</style>
<body>
	<form action="RegisterHandyman.php" method="post" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr align="center">
			<td colspan="6">
			<h2>NEW USERS? REGISTER HERE</h2></td>
		</tr>
			
		<tr>
			<td align="right"><strong>Name:</strong></td>
			<td>
				<input type="text" name="user_name" placeholder="Enter your name">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Password:</strong></td>
			<td>
				<input type="password" name="user_pass" placeholder="Enter your pass">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Email:</strong></td>
			<td>
				<input type="text" name="user_email" placeholder="Enter your email">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Contact-no:</strong></td>
			<td>
				<input type="text" name="user_contact-no" placeholder="Enter your contact-no">
			
			</td>
		</tr>
		<tr>
			<td align="right"><strong>Aadhar-no.</strong></td>
			<td>
					<input type="text" name="user_aadhar-no" placeholder="Enter your Aadhar-no">
			
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Specifications:</strong></td>
			<td colspan="6">
				plumbing:<input type="radio" name="user_sp" value="plumbimg"/>
				carpentry:<input type="radio" name="user_spe" value="carpentry"/>
				painting:<input type="radio" name="user_spec" value="painting"/>
				electrician:<input type="radio" name="user_speci" value="electrician"/>
			
				
			</td>
			
		</tr>
		<tr align="center">
			<td colspan="6"><input type="submit" name="register" value="register now"></td>
		</tr>
	
	
	</form>
	</table>
	</body>
	</html>