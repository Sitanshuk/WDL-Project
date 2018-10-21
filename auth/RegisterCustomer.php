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
	<form action="insert.php" method="post" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr align="center">
			<td colspan="6">
			<h2>NEW USERS? REGISTER HERE</h2></td>
		</tr>
			
		<tr>
			<td align="right"><strong>Name:</strong></td>
			<td>
				<input type="text" name="u_name" placeholder="Enter your name">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Password:</strong></td>
			<td>
				<input type="password" name="u_pass" placeholder="Enter your pass">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Email:</strong></td>
			<td>
				<input type="text" name="u_email" placeholder="Enter your email">
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Contact-no:</strong></td>
			<td>
				<input type="text" name="u_contact-no" placeholder="Enter your contact-no">
			
			</td>
		</tr>
		<tr>
			<td align="right"><strong>Address:</strong></td>
			<td>
				<textarea name="u_address" cols="20" rows="5"></textarea>
			</td>
			
		</tr>
		
		<tr align="center">
			<td colspan="6"><input type="submit" name="register" value="register now"></td>
		</tr>
	
	
	</form>
	</table>
	<?php
	$nameErr = $emailErr = $genderErr = $contactErr = $passErr= "";
	$name = $email = $gender = $comment = $contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["contact"])) {
    $contactErr = "";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
}  
}

?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
	</html>