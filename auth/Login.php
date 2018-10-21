<?php
include 'header.php'
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
	
	
}
.main{
	/*background-color: skyblue;*/
}
.auth{
	margin-left: 22vw;
	margin-top: 5vh;  
	/*padding:10vh 0 0 20vw;*/
	/*padding-top: 10vh;*/
	width:30vw;
	height: 30vh;
	background-color: #f7b32c;

}
.foot{

	position: fixed;
	bottom: 0;
}
table{
	/*color:white;*/
	
	text-align: center;
	
	width:400px;
	height:200;
	border:none;
}
input{
	padding:5px;
}



</style>
<body>
	<div class="auth">
	<form action="login.php" method="POST" enctype="multipart/form-data">
	<table align="center" backgroundgcolor="gray" width="500">
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
		<tr>
		<td>
		User Type?:
		</td>
			 <td align="center">
            <input type="radio" name="radio" value="Handyman" />Handyman
            <input type="radio" name="radio" value="Customer" />Customer
		</td>
		</tr>
		
		<tr align="center">
			<td colspan="6"><input type="submit" name="login"
+			value="Login now"></td>
		</tr>
	
	
	</form>
</div>
	<?php
	if(isset($_POST['login'])){
		
		$con=mysqli_connect("localhost","root","","masterdatabase") or die("connection failed!!");
		$email=$_POST['user_email'];
		$pass=$_POST['user_pass'];
		$usertype=$_POST['radio'];
	//echo $usertype;
		if($usertype=="Handyman")
		{
			$sel="select * from worker where email='$email' and password='$pass'";
			$run=mysqli_query($con,$sel);
			$check_email=mysqli_num_rows($run);
			//echo $check_email;
			 
		
			 if($check_email==0)
		  {
			  
			  
			 echo"<script>alert('password or email is not correct try again')</script>";
			exit();
		   }
		  else
		  {
			  session_start();
			$_SESSION['handyman_email']=$email;
			//echo $_SESSION['handyman_email'];
			header('Location: HandymanHome.php'); 
		  }
		}
		else if($usertype=="Customer")
		{
			$sel="select * from customer where email='$email' and password='$pass'";
			$run=mysqli_query($con,$sel);
			$check_email=mysqli_num_rows($run);
			//echo $check_email;
			 
		
			 if($check_email==0)
		  {
			  
			  
			 echo"<script>alert('password or email is not correct try again')</script>";
			exit();
		   }
		  else
		  {
			  session_start();
			$_SESSION['cust_email']=$email;
			//echo $_SESSION['cust_email'];
			header('Location: CustomerHome.php'); 
		  }
		}
		else{
		echo "<script>alert(please  select usertype!')</script>";
	}
	
	}
?>	
</div>
</table></form></div>	
<div class="foot">
<?php
include 'footer.php'
?>
</div>