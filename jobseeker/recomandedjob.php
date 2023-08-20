<?php

 
include_once('../config.php');
session_start();
$id = $_SESSION['id'];
if(isset($_SESSION['id'])&& ($_SESSION['type']="jobseeker"))
{
    $q = "select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE login.log_id = $id";
    $result = mysqli_query($db1, $q) or die("Selecting user profile failed");
    $row = mysqli_fetch_array($result);
    $_SESSION['jsname']=$row['name'];
    $_SESSION['jsid']=$row['user_id'];
}
else
{
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style><?php include "profile_user.css"?></style>
    <title>Recomanded Job</title>
</head>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>               
                <li class="nav-item"><a class="nav-link" href="view_applied.php">View Applied Jobs</a></li>                        
                <li class="nav-item"><a class="nav-link" href="alljobs.php">View All Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                   
                
            </ul>
</nav>            
<body>
  <div class="container">
    
        <?php
        $bg=$row['basic_edu'];
        $mg=$row['master_edu'];
        $q=mysqli_query($db1,"select * from jobs where ugqual='$bg' OR pgqual = '$mg'");
        if(mysqli_num_rows($q)>0) {
            echo "<center><h2>These jobs are reccomended to you based on your profile:</h2></center>";?>
            <br>
            <center> <table class="table table-bordered">
           <thead>
               <tr>
            <th>No:</th>
            <th>Job title:</th>
            <th>Company name</th>
            <th>Job description</th>
            <th>Posted on</th>
            
        </tr>
    </thead>

            <?php
        
   $i=1;
          while ($result2 = mysqli_fetch_array($q)) {
               
                $query2 = mysqli_query($db1, "select * from employer where eid = '$result2[eid]'");
                $r2 = mysqli_fetch_array($query2);
            echo " <tr> ";
                    echo "<td>".$i."</td>";
               echo "<td><h4> <a style='color: green;'  href='view_jobs.php?jid=" . $result2['jobid'] . "'>".$result2['title']."</a></h4></td>"; 
               echo "<td><h4 > <a style='color:red' href='view_emp.php?id=".$r2['eid']."'>".$r2['ename']."</a></h4></td>";
               echo "<td><p>". substr($result2['jobdesc'],0,120) ." .......</p></td>";
               echo "<td><h4> " . $result2['postdate'] ."</h4></td>";
               $i++;
            }
            
        }
        else{
           echo "<h3 style='color: red'>No jobs for this moment! </h3>";
        }
        
    
        ?>
        </table></center>
        </div>
</body>
</html>