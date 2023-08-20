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
    <title><?php echo $row['name']; ?></title>
     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
 


    <style><?php include "profile_user.css"?></style>
     <nav class="navbar navbar-expand-sm bg-light justify-content-center">    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Home page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_applied.php">View Applied Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alljobs.php">View All Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="recomandedjob.php">Recomanded jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
  </nav>
</head>
<body>
    
    
     <center><h1  ><strong> Welcome</strong> </h1><h3 style="color : red"  ><?php echo $row['name']; ?></h3> </center>
       <center><h2> Your Profile</h2></center>


       <div class="advsearch">
         <table  class="table table-dark table-striped">
        <tr>
            <td class="tbold"><strong>Full Name:</strong></td>
            <td><h4 style="color:red"><strong><?php echo $row['name']; ?></strong></h4></td>

        </tr>
        <tr>
            <td >Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td >Phone:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td >Location:</td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <tr>
            <td >Experience (Years):</td>
            <td><?php echo $row['experience']; ?></td>
        </tr>
        <tr>
            <td >Skills:</td>
            <td><?php echo $row['skills']; ?></td>
        </tr>
        <tr>
           <td >Basic education:</td>
            <td><?php echo $row['basic_edu']; ?></td>
        </tr>
        <tr>
            <td >Master Qualification:</td>
            <td><?php echo $row['master_edu']; ?></td>
        </tr>
          <tr>
            <td >Other Qualification:</td>
            <td><?php echo $row['other_qual']; ?></td>
        </tr>
          <tr>
            <td >Date of birthday:</td>
            <td><?php echo $row['dob']; ?></td>
        </tr>
          <tr>
            <td >Resume:</td>
            <td><?php echo $row['resume']; ?></td>
        </tr>
    </table>
    </div>

    
</body>
</html>