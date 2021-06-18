<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $custpwd = $_POST['custpwd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($email);  
        $password = stripcslashes($custpwd);  
        $username = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $custpwd);  
      
        $sql = "select * from customer where email= '$email' and custpwd = '$custpwd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("location: home2.html"); 
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  