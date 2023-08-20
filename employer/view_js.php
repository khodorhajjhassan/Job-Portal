<?php

session_start();
include_once('../config.php');
$q = mysqli_query($db1,"select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE jobseeker.user_id = $_GET[jsid]");
$row=mysqli_fetch_array($q);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <style><?php include "profile_company.css"?></style>
    <title>view Jobseeker</title>
     <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Manage Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="post_jobs.php">Post New Jobs</a></li>
              
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                </li>
 
            </ul>
       
    </nav>
  
</head>


            <center> <strong><h1><?php echo $row['name']; ?></h1></strong>

            <p> <?php if($row['cv']!="") {
                    echo "<a href = '../uploads/cv/" .$row['cv']."' target='_blank'  ><button type='button' class='btn btn-success'  >
                    Download cv File </button></a >";
                }?>
                
                <hr>
                <br>
                 <p> <?php if($row['Photo']!="") {
                    echo "<a href = '../uploads/pic/" .$row['Photo']."' target='_blank'  ><button type='button' class='btn btn-success'  >
                    Show candidate Profile picture</button></a >";
                }?>
                <hr>
                <br></center>
                 <button style='color:white' type="button" class="btn btn-success" onclick="goBack()">go back</button><br>

            <center><h3> User Details:</h3>
            <table class="table" >
                <tr >
                    <td class="tbold">Full Name:</td>
                    <td><?php echo $row['name']; ?></td>

                </tr>
                <tr>
                    <td class="tbold">Email:</td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                 <tr>
                    <td class="tbold">Date of Birthday:</td>
                    <td><?php echo $row['dob']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Phone:</td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Location:</td>
                    <td><?php echo $row['location']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Experience (Years):</td>
                    <td><?php echo $row['experience']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Skills:</td>
                    <td><?php echo $row['skills']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">UG Qualification:</td>
                    <td><?php echo $row['basic_edu']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">PG Qualification:</td>
                    <td><?php echo $row['master_edu']; ?></td>
                </tr>
                 <tr>
                    <td class="tbold">Other Qualification:</td>
                    <td><?php echo $row['other_qual']; ?></td>
                </tr>
              
            </table></center>
    

</body>

</html>
