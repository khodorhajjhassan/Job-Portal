<?php

include_once('../config.php');
session_start();
$eid=$_SESSION['eid'];
$title=$_POST['title'];
$vacno=$_POST['vacno'];
$jobdesc=$_POST['jobdesc'];
$exp=$_POST['exp'];
$money=$_POST['money'];
$salary=$_POST['pay'];
$fnarea=$_POST['fnarea'];
$location=$_POST['location'];
$indtype=$_POST['indtype'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$profile=$_POST['profile'];
$date=date('d-m-y');
$pay=$money." ".$salary;

$message="success";

mysqli_select_db($db1,"job");

$query= "INSERT INTO jobs (`eid`, `title`, `jobdesc`, `vacno`, `experience`, `basicpay`, `fnarea`, `location`, `industry`, `ugqual`, `pgqual`, `profile`, `postdate`) 
VALUES ('$eid','$title','$jobdesc','$vacno','$exp','$pay','$fnarea','$location','$indtype','$ug','$pg','$profile','$date')";

$result=mysqli_query($db1,$query);

if ($result)
{
    header('location:profile.php?msg=jobposted');
    echo "<script>alert('$message');</script>";
}
else{
    
     echo("Error description: " . mysqli_error($db1));

}
?>