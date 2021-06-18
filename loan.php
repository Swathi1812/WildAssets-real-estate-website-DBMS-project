<?php 
 include('index.php');
 $loanid=$_POST['loanid'];
 $processing_fee=$_POST['processing_fee'];
 $roi=$_POST['roi'];
 $bankname=$_POST['bankname'];
 $propertyid=$_POST['propertyid'];

 
 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }

	$stm= $con->prepare("INSERT INTO `wildassets`.`loan`(`loanid`, `processing_fee`,`roi`,`bankname`,`propertyid`) 
VALUES ('$loanid','$processing_fee','$roi','$bankname','$propertyid')");
	$stm->execute();
	
	echo "<script>window.alert('Loan confirmed')
window.open('home2.html','_self')</script>";
	$stm->close();
	$con->close();
 
 ?>