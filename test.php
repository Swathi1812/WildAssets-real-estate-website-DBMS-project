<?php
include('index.php');
 $uname=$_GET["email"];
 $pwor=$_GET["custpwd"];
 
 
 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }
 else
 {
	 $stmt= $con->prepare("select * from customer where email= ?");
	 $stmt->bind_param("s",$email);
	 $stmt->execute();
	 $stmt_result= $stmt->get_result();
	 if($stmt_result->num_rows>0)
	 {
		 $data=$stmt_result->fetch_assoc();
		 if($data['pwor']===$pword)
		 {
			 echo "<script>window.open('home2.html','_self')</script>";
		 }
		 else
		 { 
		    echo "<script>window.alert(' Invalid email id or password')
window.open('clogin.html','_self')</script>";
		 }
	 }
	else
	{
		echo "<script>window.alert(' Invalid email id or password')
window.open('clogin.html','_self')</script>";
	}
 }
	
?>