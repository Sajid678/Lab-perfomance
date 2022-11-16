<?php 
$username = null;
$password = null;
$error = null;
$success_msg = null;

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   if(empty(trim($username))){
    $error = "Username is empty.";
    } elseif(empty(trim($password))){
    $error = "Password field is empty";
    }else
    {
        $stored_users = json_decode(file_get_contents("data.json"), true);
        foreach ($stored_users as $user) {
            if($user['name'] == $username){
               if($user['password'] == $password){
                  session_start();
                  $_SESSION['user'] = $username;
                  header("location: welcome.php"); exit();
                  $success_msg = "You are loged in";
               }else{
                 $error = "Invalid password !!";
               }
            } else{
                $error = "Invalid Username or Password.!!";
            }
         }



    }

}

?>