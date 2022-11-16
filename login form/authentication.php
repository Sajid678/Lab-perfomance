<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $password = $_POST['pass'];  
   
      
         
        $username = stripcslashes($username);  
        $email = stripcslashes( $email);
        $nid = stripcslashes ($nid);
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);
        $email =  mysqli_real_escape_string($con,$email);
        $nid = mysqli_real_escape_string($con,$nid);
        $password = mysqli_real_escape_string($con, $password);  

      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  