<?php
include 'header.php'
?>
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
.auth{
	margin-left: 22vw;
	margin-top: 5vh;  
	/*padding:10vh 0 0 20vw;*/
	/*padding-top: 10vh;*/
	width:30vw;
	height: 30vh;
	background-color: #f7b32c;

}
h2{
	padding-left: 10vw;
}
.foot{

	position: fixed;
	bottom: 0;
}
</style>
<body>
	<div class="auth">
		<h2>Become a Member!</h2>
		<br>
	<form action="home.php" method="GET" enctype="multipart/form-data">
	<table align="center" bgcolor="gray" width="500">
		<tr>
			 <td align="center">
            <input type="radio" name="radio" value="Handyman" />Handyman
            <input type="radio" name="radio" value="Customer" />Customer
 
            </td>
			<td colspan="6"><input type="submit" name="register" value="register now"></td>
		</tr>
		
		
		<tr>
		
  		<td>Already a member? <a href="login.php">Login</a></td>
		</tr>
		<tr><td></td></tr>
		
	<tr>
	<td>
	
		<?php
	if(isset($_GET['register'])){
		$UserType=$_GET['radio'];
		
		if($UserType=="Handyman")
		{
			header('Location: RegisterHandyman.php'); 
		 //include('RegisterHandyman.php');
		
		}
		else{
			header('Location: RegisterCustomer.php'); 
		//include('RegisterCustomer.php');
			
		}
		
	}
	
	?>
	
	

</td>
	
	</tr>
	</div>
</div>
	</form>
</div>
	</table>
	
	</body>
</div>
<div class="foot">
<?php
include 'footer.php'
?>
</div>
	</html>
	
	
	
	
	
	
	
	