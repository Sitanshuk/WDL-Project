<?php
	function OpenCon()
	{
		$dbhost="localhost";
		$dbuser="snv";
		$dbpass="tecmpna";
		$db="service_provider";
		$conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connection Falied %s\n".$conn -> error);
		return $conn;
	}
	function CloseCon($conn)
	{
		$conn -> close();
	}
?>