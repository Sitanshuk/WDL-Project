<?php
include 'header.php';
?>
</header>

<html>
	<head>
		<title>Registration Form</title>
		</head>
<style>
body{
	/*border: 10px double black;*/
	padding:0;
	margin:0;
	/*background:skyblue;*/
	height: 135vh;
	
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
table a{
	color: black;	
	text-align: center;
}

.con{
	margin-left: 20vw;
	margin-top: -3vh;  

	width:35vw;

	background-color: #f7b32c;

}



</style>
<body>
	<div class="con">
	<form action="RegisterHandyman.php" method="post" enctype="multipart/form-data">
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
				<input type="text" name="u_phone_no" placeholder="Enter your contact-no">
			
			</td>
		</tr>
		<tr>
			<td align="right"><strong>Aadhar-no.</strong></td>
			<td>
					<input type="text" name="u_adhar_no" placeholder="Enter your Aadhar-no">
			
			</td>
			
		</tr>
		<tr>
			<td align="right"><strong>Service:</strong></td>
			<td>
			<select name="u_service">
            <option value="1">carpentry</option>
            <option value="2"> electrician </option>
            <option value="3"> painting </option>
            <option value="4"> plumbimg </option>
      
          </select>
			
			</td>
			
		</tr>
		<tr>
		<td align="right"><strong>Select Branch:</strong></td>
		<td>
		  
  <select name="u_branch">
            <option value="0">Select City</option>
            <option value="1"> Delhi </option>
            <option value="2"> Mumbai </option>
            <option value="3"> Pune </option>
      
          </select>
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
</div>
	<?php
	if(isset($_POST['register']))
	{
		
		$con=mysqli_connect("localhost","root","","masterdatabase") or die("connection failed!!");
		 
		 $bid=$_POST['u_branch'];
		 $sid=$_POST['u_service'];
		 $name=$_POST['u_name'];
		 $pass=$_POST['u_pass'];
		 $adhar_no=$_POST['u_adhar_no'];
		 $email=$_POST['u_email'];
		 $phone_no=$_POST['u_phone_no'];
	
		$insert="insert into worker values(null,'$bid','$sid','$name','$pass','$adhar_no','$email','$phone_no')";
		$run=mysqli_query($con,$insert);
		
		if($run)
		{
			echo "Registration Sccessful";
		}
		
	}
	?>
	</body>
	</html>
	<?php
include 'footer.php';
?>
