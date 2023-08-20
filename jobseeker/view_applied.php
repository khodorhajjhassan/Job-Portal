<?php

session_start();
$jsid=$_SESSION['jsid'];
include_once('../config.php');
$q1=mysqli_query($db1,"select * from application WHERE user_id=$jsid");
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style><?php include "profile_user.css"?></style>
    
    <title>View Applied Jobs</title>
</head>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>   
                                   
                <li class="nav-item"><a class="nav-link" href="recomandedjob.php"> Recomanded Jobs</a></li>
                 <li class="nav-item"><a class="nav-link" href="alljobs.php"> View All Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>                                   
            </ul>
</nav>
<body>
    <div class="container">

    <center><h2>You Applied for these jobs</h2></center>
    <br>
     <?php if(mysqli_num_rows($q1)>0) { ?>
 <center> <table class="table table-bordered">
           <thead>
               <tr>
            <th> NO:</th>
            <th>Job Title:</th>
            <th>Company name:</th>
             <th>Posted Date:</th>
            <th>Applied Date:</th>
         
        </tr>
    </thead>
        <?php
$i=1;
        while($row=mysqli_fetch_array($q1)) {
			
            $job_id=$row['job_id'];
            $q2=mysqli_query($db1,"select * from jobs where jobid = $job_id");
            while ( $result = mysqli_fetch_array($q2) ) {
                 
				
                $comp=mysqli_query($db1,"select * from employer WHERE eid = $result[eid]");
                $rowcomp=mysqli_fetch_array($comp);
                  echo " <tr> ";
                    echo "<td>".$i."</td>";
               echo "<td><h3><a style='color: green;'  href='view_jobs.php?jid=" . $result['jobid'] . "'>".$result['title']."</a></h3></td>"; 
               echo "<td><h4>  <a style='color:red' href='view_emp.php?id=".$rowcomp['eid']."'>".$rowcomp['ename']."</a></h4></td>";
               
               echo "<td><h4> " . $result['postdate'] ."</h4></td>";
               echo "<td><h4>  " . $row['date_applied']."</h4></td>";
                 $i++;
            }
          
           
        }
        ?>

    <?php } else {  echo " <p><strong>Note:</strong> You have'nt applied for any jobs yet!</p>";
        }
     ?>
     </table></center>
</div>
</body>

</html>
