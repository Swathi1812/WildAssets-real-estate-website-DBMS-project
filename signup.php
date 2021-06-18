 <?php 
 include('index.php');
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $dob=$_POST['dob'];
 $email=$_POST['email'];
 $phoneno=$_POST['phoneno'];
 $custpwd=$_POST['custpwd'];
 $confirm=$_POST['confirm'];
 
 $con= new mysqli("localhost","root","","wildassets");
 if($con->connect_error)
 {
	 die("Failed to connect : ".$con->connect_error);
 }
 else
 {
	 $stmt= $con->prepare("INSERT INTO `wildassets`.`customer`(`custid`, `fname`, `lname`, `dob`, `email`, `phoneno`, `custpwd`) 
	 VALUES (NULL, '$fname', '$lname', '$dob', '$email', '$phoneno', '$custpwd');");
	 //$stmt->bind_param("ssssss",$fname,$lname,$email,$phoneno,$custpwd);
	 $stmt->execute();
	 echo "<script>window.open('clogin.html','_self')</script>";
	 $stmt->close();
	 $con->close();
}
 
 ?>