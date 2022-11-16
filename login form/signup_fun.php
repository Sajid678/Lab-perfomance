<?php 

$username = null;
$email= null;
$nid = null;
$password = null;
$username_error = null;
$email_error = null;
$nid_error = null;
$password_error = null;
$success_msg = null;

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $nid = $_POST['nid'];
   $email= $_POST['email'];

   if(empty(trim($username))){
    $username_error = "Username is empty.";
    } elseif(empty(trim($email))){
    $email_error = "Email is empty.";
    }elseif(empty(trim($nid))){
    $nid_error = "NID number is empty";
     }elseif(empty(trim($password))){
    $password_error = "Password field is empty";
    }else{

    $new_msg = array(
        "name" => $username,
        "email" => $email,
        "nid" => $nid,
        "password" =>$password
    );

    if(filesize("data.json")==0){
        $first_record = array($new_msg);
        $data_to_save = $first_record;
    }else{
        $old_records=json_decode(file_get_contents("data.json"));
        array_push($old_records, $new_msg);
        $data_to_save = $old_records;
    }

    if(!file_put_contents("data.json", json_encode($data_to_save))){
        $success_msg = "Sign-up is unsuccessful.";
    }else{
        $success_msg = "Sign-up is successful.";
    }



    }

}


?>