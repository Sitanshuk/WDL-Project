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
	
}
input{
	padding:5px;
}



</style>
<body>
	<form action="insert.php" method="post" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr align="center">
			<td colspan="6">
			<h2>LOGIN</h2></td>
		</tr>
			
		<tr>
			<td align="right"><strong>Email:</strong></td>
			<td>
				<input type="text" name="user_email" placeholder="Enter your email">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Password:</strong></td>
			<td>
				<input type="password" name="user_pass" placeholder="Enter your pass">
			</td>
			
		</tr>
		<hr>
		
		</hr>
		<hr>
		</hr>
		<tr align="center">
			<td colspan="6"><input type="submit" name="login" value="Login now"></td>
		</tr>
	
	
	</form>
	</table>
	</body>
	</html>