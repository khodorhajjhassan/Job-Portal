<?php
session_start();
include_once('../config.php');
$user_id=$_GET['user'];
$emp_id=$_GET['emp'];
$job_id=$_GET['job'];
$date=date('d-m-y');
$q=mysqli_query($db1,"select * from selection where job_id=$job_id and user_id= $user_id ");
if(mysqli_num_rows($q)>0){
    echo " 
           <p><strong>Sorry!</strong> This user is already Selected for the job</p>
        </div>";
}else{
    $q2=mysqli_query($db1,"insert into selection(user_id,emp_id,job_id,date,status) VALUES ($user_id,$emp_id,$job_id,'$date',1)");
    $q3=mysqli_query($db1,"UPDATE application SET status = '2' WHERE application.user_id =$user_id and application.job_id=$job_id ;");
    if($q3){
        echo " 
           <p><strong>Success!</strong> This user is succesfully selected for the job</p>";
       
    }
    else{
        echo "
           <p><strong>Sorry!</strong> Something Went Wrong! Try Again</p>";
       
    }
}
?>
