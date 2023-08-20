<?php
include_once('../config.php');
session_start();
$q1=mysqli_query($db1,"select * from selection where job_id=$_GET[jobid]");
$q2=mysqli_query($db1,"select * from jobs where jobid = $_GET[jobid]");
$q3row=mysqli_fetch_array($q2);
$emp_id=$_SESSION['eid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selection</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style><?php include "profile_company.css"?></style>


         <nav class="navbar navbar-expand-sm bg-light justify-content-center">
 <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="profile.php">Account Overview</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Edit Profile</a></li>
      <li class="nav-item"><a class="nav-link" href="managejobs.php">Manage jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>
      <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>

      </ul>   
</nav>
</head>
<body>

    <center><h1 style="color:black">These users have been selected for : </h1><h2 style="color:red"><?php echo $q3row['title'];?></h2></center>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
             
              <div style='padding-left:10px' class="inputfield">
        <button style='color:white' type="button" class="btn btn-success" onclick="goBack()">go back</button><br>
        <br>
      
             
    </div>
                 <br>
                
    <?php if(mysqli_num_rows($q1)>0) { ?>
        <div class="container">
        <h3 style>Selected candidate</h3>
        <p>You can see all profiles of your selected candidates to contact them after </p>
        <center><table class="table table-bordered">
            <thead>
                <tr>
            <th>Applicant NO:</th>
            <th>Full Name:</th>
            <th>Selected Date:</th>
        </tr>
        </thead>
               <?php
               $i=1;
            while($row=mysqli_fetch_array($q1)) {
                
                $user_id=$row['user_id'];
                $q2=mysqli_query($db1,"select * from jobseeker where user_id = $user_id");
                
                while ( $result = mysqli_fetch_array($q2) ) {
                   
                    $qsel=mysqli_query($db1,"select * from selection");
                    $ressel=mysqli_fetch_array($qsel);
                    echo " <tr> ";
                    echo "<td>".$i."</td>";
                    echo "<td><button type='button' class='btn btn-info'  ><a style='text-decoration: none; color:white' href='view_js.php?jsid=" . $result['user_id'] . "'>".$result['name']."</a></button></td>";
                     echo "<td>" . $row['date']."</td>";
                      $i++;
                }
               
            }
            
           
            ?>
        </table></center>
        </div>
    <?php } else {  echo "<h2><strong>NO one selected for this job !</strong></h2>";
    }
    ?>
</body>
</html>
         
