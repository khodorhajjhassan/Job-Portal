<?php
 if(isset($_GET['msg']) && ($_GET['msg']=="jobposted")){
          ?>
          <script type='text/javascript'>alert("Successful : YOURS JOB HAS POSTED!");</script>
          <?php
      }
include_once('../config.php');
session_start();
$notifycount=0;
$id = $_SESSION['elogid'];
if(isset($_SESSION['elogid']))
{
$q = "select * from login join employer on login.log_id=employer.log_id WHERE login.log_id = $id";
$result = mysqli_query($db1, $q) or die("Selecting user profile failed");
$row = mysqli_fetch_array($result);

    $_SESSION['eid']=$row['eid'];
    $_SESSION['name']=$row['ename'];
    
 $q1=mysqli_query($db1,"select * from application where emp_id=$_SESSION[eid]");
 


   if(mysqli_num_rows($q1)>0) {
        while($row2=mysqli_fetch_array($q1)){
            if ($row2['status']==1){
        $GLOBALS['notifycount'] += 1;
        }
    }
}

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


    <style><?php include "profile_company.css"?></style>
    <title>Company Profile</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>

<body>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="post_jobs.php">Post Jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="managejobs.php">Manage Jobs</a></li> 
       <li><a href="#" class="notification">
           No. OF APP&nbsp;<span class="badge">&nbsp<?php echo $notifycount; ?></span></a></li> 
      <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>

    </ul>
</nav>       
        <div class="bdy">
        <center><h1 >Welcome </h1><h3 style="color:red"> <?php echo $row['ename']; ?></h3></center>
        <br>
        <h3 > Post jobs and find the right candidates!</h3>
 
        </div>

    <h3>Company Profile:</h3> 
    <hr>
    <table  class="table table-dark table-striped" id="center">
        <tr>
            <td class="tbold">Name:</td>
            <td><strong><?php echo $row['ename']; ?></strong></td>
        </tr>
        <tr>
            <td >Type:</td>
            <td><?php echo $row['etype']; ?></td>
        </tr>
        <tr>
            <td >Industry:</td>
            <td><?php echo $row['industry']; ?></td>
        </tr>
        <tr>
            <td >Address:</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <tr>
            <td >Pincode:</td>
            <td><?php echo $row['pincode']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Executive Name:</td>
            <td><strong><?php echo $row['executive']; ?></strong></td>
        </tr>
        <tr>
            <td class="tbold">Phone Number:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
          <tr>
            <td >Company URL:</td>
            <td><?php echo $row['url']; ?></td>
        </tr>
       
        <tr>
            <td >About Company:</td>
            <td><?php echo $row['profile']; ?></td>
        </tr>
    </table>
   
           
</body>
</html>