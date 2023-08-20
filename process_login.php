<?php
include_once 'config.php';


  
$email=mysqli_real_escape_string($db1,$_POST['email']);
$password=mysqli_real_escape_string($db1,$_POST['password']);
$password=md5($password);
$email= stripcslashes($email);
$password= stripcslashes($password);



$query=("SELECT * from login where email='$email' and password='$password';") or die ("faild to query database".mysqli_error());
$result=mysqli_query($db1,$query);

$result=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(($result>0)){
    if($result['usertype']=="jobseeker")
    {
        session_start();
        $_SESSION["id"] = $result['log_id'];
        $_SESSION["type"] = $result['usertype'];
        header('location:jobseeker/profile.php?msg=success');

    }
 elseif($result['usertype']=="employer")
 {
     session_start();
     $_SESSION["elogid"] = $result['log_id'];
     $_SESSION["type"] = $result['usertype'];
     $_SESSION["status"]=$result['status'];
     header('location:employer/profile.php?msg=success');
 }
}

else {
   header('location:login.php?msg=failed');
}
   






?>