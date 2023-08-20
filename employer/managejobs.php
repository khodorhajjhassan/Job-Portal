<?php

session_start();
include_once('../config.php');
$query=mysqli_query($db1,"select * from jobs where eid = $_SESSION[eid]");

?>
<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META HTTP-EQUIV="refresh" CONTENT="60">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style><?php include "profile_company.css"?></style>
<head>
    <title>Manage  Jobs</title>
</head>
<script>
    window. onload = function() {
if(! window. location. hash) {
window. location = window. location + '#loaded';
window. location. reload();
</script>
   
          
    
<body>          
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Manage Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="post_jobs.php">Post New Jobs</a></li>
              
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                </li>
 
            </ul>
       
    </nav>
<br>
<div class="container">
<center><table id="customers" class="table table-bordered" >
<h2 class="tabletitle">Manage Your Posted Jobs</h2>
<?php 
if(mysqli_num_rows($query)>0) { ?>
 <thead>
     <tr>
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Date of Posting</th>
        <th colspan="5">Actions</th>
    </tr>
    </thead>
    <?php
    while($result=mysqli_fetch_array($query)){
 

    echo" <tr> ";
        echo "<td>".$result['title']."</td>";
        echo "<td>".substr($result['jobdesc'],0,130)." ..........</td>";
        echo "<td>".$result['postdate']."</td>";
        echo "<td>  <a style='color: white;'  href='view.php?jid=".$result['jobid']."'><button type='button' class='btn btn-info'>View Job</button></a> </td>";
                echo "<td> <a style='color: white;'  href='manage_applicants.php?jobid=".$result['jobid']."'><button type='button' class='btn btn-success'> View Applicants</button> </a></td>";

                echo "<td> <a   href='view_selection.php?jobid=".$result['jobid']."'><button type='button' class='btn btn-warning'> View All selection</button> </a></td>";

        echo "</tr>";
    }
?>
    </table></center>
</div>
  
<?php } else  echo " You haven't posted any jobs yet!";
?>
</body>

</html>
