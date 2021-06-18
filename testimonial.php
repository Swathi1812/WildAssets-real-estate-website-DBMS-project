<?php 
 include('index.php');
 $custid=$_POST['custid'];
 $profession=$_POST['profession'];
 $propertyid=$_POST['propertyid'];
 $custsatisfaction=$_POST['custsatisfaction'];

 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }

	$stm= $con->prepare("INSERT INTO `wildassets`.`testimonial`(`custid`,`profession`, `propertyid`,`custsatisfaction`) 
VALUES (NULL,'$profession','$propertyid', '$custsatisfaction')");
	$stm->execute();
	
	echo "<script>window.alert('Thank you for the feedback!')
window.open('home2.html','_self')</script>";
	$stm->close();
	$con->close();
 
 ?>