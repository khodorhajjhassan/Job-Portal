<?php

include_once('../config.php');
function function_alert($message) {
      
    echo "<script>alert('$message');</script>";
}

    if(empty($_POST['email'] && ($_POST["pass1"]))){
         function_alert("Both Fields are requered!");

    }
    else {

$email=mysqli_real_escape_string($db1,$_POST['email']);
$password=mysqli_real_escape_string($db1,$_POST['pass1']);
$password=md5($password);
$pass2=md5($_POST['pass2']);
$name=$_POST['compname'];
$type=$_POST['comtype'];
$industry=$_POST['indtype'];
$addr=$_POST['addr'];
$pin=$_POST['pin_code'];
$person=$_POST['person'];
$phone=$_POST['phone'];
$exec=$_POST['exec'];
$profile=$_POST['add'];
$logo=$_POST['logo'];
$url=$_POST['url'];

if($password != $pass2){
   header('location:register_emp.php?msg=cpw');
 ?>

 <?php
    
}
else {



    


mysqli_select_db($db1,"job");

    
  

$query1="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$password','employer',0)";
    $result1 = mysqli_query($db1,$query1) or die( function_alert("Cant Register , The user email may be already existing !!"));
$query2 =  "INSERT INTO employer (`log_id`, `ename`, `etype`, `industry`, `address`, `pincode`, `executive`, `phone`, `profile`, `logo`, `url`) 
VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$type','$industry','$addr','$pin','$exec','$phone','$profile','$logo','$url');";


                 $result2 = mysqli_query($db1,$query2);

if ($result2)
{
        header('location:../login.php?msg=registered');
}

else{
    echo("Error description: " . mysqli_error($db1));
}

}

    }
?>