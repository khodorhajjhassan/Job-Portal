<?php
include_once('../config.php');
session_start();
$user_id=$_GET['user'];
$emp_id=$_GET['emp'];
$job_id=$_GET['job'];
$query = "DELETE FROM application WHERE job_id=$job_id and user_id= $user_id ";
$result = mysqli_query($db1,$query);
if($result) {
    echo "<h3 style='color: green;'> This candidate is Successfully Deleted</h3>";
}
else{
    echo "<h3 style='color: red;'> Failed to delete this candidate!</h3>";
}
?>
