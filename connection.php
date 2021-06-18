<?php
 $host ="localhost";
 $user ="root";
 $password ="";
 $db_name ="wildassets";

$con= mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()){
	die("Failed to connect with mysqli:".mysqli_connect_error());
}
 

   
?>