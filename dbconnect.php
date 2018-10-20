<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "snv";
 $dbpass = "tecmpna";
 $db = "handymen";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 
 
 
 }
   
?>