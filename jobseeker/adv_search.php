<?php

session_start();
include_once("../config.php");


$location=$_GET['location'];
$desig=$_GET['desig'];
$skills=$_GET['skills'];
$industry=$_GET['industry'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>searching result</title>
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
                <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="view_applied.php">View Applied Jobs</a></li>     
                <li class="nav-item"><a class="nav-link" href="recomandedjob.php"> Recomanded Jobs</a></li>   
               
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                    
                
            </ul>
</nav>
</head>
<body>


<div class="container">


 <?php   
$query = "select * from jobs  where title = '$desig'  or location LIKE '%" . $location . "%' or profile LIKE '%" . $skills . "%' or industry LIKE '%" . $industry . "%' ";
$result = mysqli_query($db1, $query);

if (mysqli_num_rows($result) == 0)
{
    echo " <p><strong>Sorry!</strong> No jobs found matching your search or try something else</p>";
       
}
else {
    ?>

        
    <?php
?>




    <?php
    echo "<h2><center> Search Results Matching :</center></h2>";
   ?>


 <br>
            <center> <table class="table table-bordered">
           <thead>
               <tr>
            <th>No:</th>
            <th>Job title:</th>
  
            <th>Job description</th>
            <th>Location</th>
            <th>Posted on</th>
            
        </tr>
    </thead>
<?php
$i=1;
    while ($row = mysqli_fetch_array($result)) {
        
        $query2 = mysqli_query($db1, "select * from employer where eid = '$row[eid]'");
        $r2 = mysqli_fetch_array($query2);


       
        echo "<tr>";
          echo "<td>".$i."</td>";
         echo "<td><h3> <a style='color: green;'  href='view_jobs.php?jid=" . $row['jobid'] . "'>".$row['title']."</a></h3></td>"; 
               echo "<td><h4><a href='view_emp.php?id=".$r2['eid']."'>".$r2['ename']."</a></h4></td>";
               echo "<td><p>". substr($row['jobdesc'],0,120) ." .......</p></td>";
                echo "<td><p><strong> " . $row['location']."</strong></p></td>" ;
               echo "<td><h4>" . $row['postdate'] ."</h4><td>";
            $i++;
            }
     
           
        }
        
    


    

         ?>
         </table></center>
</body>
</html>
