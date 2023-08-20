<?php
include_once('../config.php');
function function_alert($message) {
      
    echo "<script>alert('$message');</script>";
}
if(empty($_POST['useremail'] && ($_POST["pass1"]))){
         function_alert("Both Fields are requered!");

    }
    else {
$email=$_POST['useremail'];
$password=$_POST['pass1'];
$password=md5($password);
$name=$_POST['uname'];
$mobile=$_POST['mobno'];
$experience=$_POST['experience'];
$skills=$_POST['skills'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$qual=$_POST['qual'];
$dob=$_POST['dob'];
$desc=$_POST['desc'];
$location=$_POST['location'];
$pass2=md5($_POST['pass2']);
if($password != $pass2){
   header('location:register_user.php?msg=cpw');
}
else{
mysqli_select_db($db1,"job");
$query1="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$password','jobseeker',1)";
    $result1 = mysqli_query($db1,$query1) or die( function_alert("Cant Register , The user email may be already existing !!"));
$query2 =  "INSERT INTO jobseeker (`log_id`, `name`, `phone`, `location`, `experience`, `skills`, `basic_edu`, `master_edu`, `other_qual`, `dob`, `resume`,`cv`) 
VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$mobile','$location','$experience','$skills','$ug','$pg','$qual','$dob','$desc','');";
if (mysqli_query($db1,$query2))
{
   echo '<script>alert("registerd success")</script>';
        header('location:../login.php?msg=registered');
}
else{
       

    echo("Error description: " . mysqli_error($db1));
}
}
    }

?>