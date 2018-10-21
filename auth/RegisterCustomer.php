
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
table a{
	color: black;	
	text-align: center;
}
input{
	padding:5px;
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
	<form action="RegisterCustomer.php" method="POST" enctype="multipart/form-data">
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
				<input type="text" name="u_mobile" placeholder="Enter your contact-no">
			
			</td>
		</tr>
		<tr>
			<td align="right"><strong>Address:</strong></td>
			<td>
				<textarea name="u_address" cols="20" rows="5"></textarea>
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
		 $name=$_POST['u_name'];
		 $pass=$_POST['u_pass'];
		 $email=$_POST['u_email'];
		 $mobile=$_POST['u_mobile'];
		 $add=$_POST['u_address'];
		 $p_email="select * from customer where email='$email'";
		  $run_email=mysqli_query($con,$p_email);
		  $check_email=mysqli_num_rows($run_email);
		  echo $check_email;
		  if($check_email!=0)
		  {
			echo "<script> alert('This email is already registered');</script>";
			exit();
		  }
		  else
		  {
		
		$insert= "insert into customer values(null,'$bid','$name','$pass','$mobile','$email','$add')";
		$run= mysqli_query($con,$insert);
		
		if($run)
		{
			echo "<script>alert('Registration Successful!!!')</script>";
			
		}
	
		}
	}
	?>
	
	
	
	
	</body>
	</html>

<?php
include 'footer.php';
?>
