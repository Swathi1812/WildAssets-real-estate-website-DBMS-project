<?php 
 include('index.php');
 $registrationid=$_POST['registrationid'];
  $registrationdate=$_POST['registrationdate'];
 $registrationstatus=$_POST['registrationstatus'];
 $propertyid=$_POST['propertyid'];

 
 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }

	$stm= $con->prepare("INSERT INTO `wildassets`.`registration`(`registrationid`, `registrationdate`, `registrationstatus`, `propertyid`) 
VALUES (NULL, '$registrationdate', '$registrationstatus', '$propertyid')");
	$stm->execute();
	
	echo "<script>window.alert('Registration confirmed')
window.open('home2.html','_self')</script>";
	$stm->close();
	$con->close();
 
 ?>