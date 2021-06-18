<?php 
include('index.php');
 $cancellationid=$_POST['cancellationid'];
 $cancellationdate=$_POST['cancellationdate'];
 $amountrefunded=$_POST['amountrefunded'];
 $propertyid=$_POST['propertyid'];


 
 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }

	$stm= $con->prepare("INSERT INTO `wildassets`.`cancellation`(`cancellationid`, `cancellationdate`, `amountrefunded`, `propertyid`) 
VALUES (NULL,'$cancellationdate', '$amountrefunded', '$propertyid')");
	$stm->execute();
	
	echo "<script>window.alert('Cancellation confirmed')
window.open('home2.html','_self')</script>";
	$stm->close();
	$con->close();
 
 ?>


