<?php
include_once('../config.php');
session_start();
$jobid=$_GET['jid'];
$jsid=$_SESSION['jsid'];
$date=date("d-m-y");
$q1=mysqli_query($db1,"select * from application where job_id =$jobid AND user_id = $jsid");
if(mysqli_num_rows($q1)>=1){
    echo " <h2>Note:</h2>
           <h3 style='color:red'>You have already applied for this job!</h3>
        ";
}
else{
 
    $q2=mysqli_query($db1,"insert into application (user_id,emp_id,job_id,status,date_applied) VALUES ($jsid,(SELECT eid from jobs where jobid = $jobid),$jobid,1,'$date')");
    if($q2){
         echo " 
         <h2>Note:</h2><h3 style='color:green'> You have successful applied for this job!</h3>  ";
           
      

    }
  
    


}
?>