<?php

include_once('../config.php');
session_start();
$jobid=$_GET['jid'];
$query=mysqli_query($db1,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);
?>
<!DOCTYPE HTML>
<html>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<META HTTP-EQUIV="refresh" CONTENT="15">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <style><?php include "profile_company.css"?></style>
<head>
     <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script type="text/javascript">
    function deletejob(jobid) {
      const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "deletejob.php?jid=" + jobid, true );
  xhttp.send();
window.history.back();

}

    
    </script>
   

    <title> View Jobs </title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light justify-content-center">
 <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="profile.php">Account Overview</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Edit Profile</a></li>
      <li class="nav-item"><a class="nav-link" href="managejobs.php">Manage jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="profile.php">Home page</a></li>
      <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>

      </ul>   
</nav>


    <center><h2>View Job </h2></center>
   
   <div style='padding-left:10px' class="inputfield">
        <button style='color:white' type="button" class="btn btn-success" onclick="goBack()">go back</button><br>
        <br>
       <button style='color:white' type="button" class="btn btn-danger" onclick="deletejob(<?php echo $result['jobid']; ?>)">
               Delete Job </button>
               <br>
    </div>


    <center><h3> Job Details: </h3></center>
    <hr>
    <table class="table table-dark table-striped">
        <tr>
            <td>Designation:</td>
            <td><?php echo $result['title']; ?></td>
        </tr>
        <tr>
            <td >Date of Posting:</td>
            <td><?php echo $result['postdate']; ?></td>
        </tr>
        <tr>
            <td >Number of Vacancies: </td>
            <td><?php echo $result['vacno']; ?> </td>
        </tr>
        <tr>
            <td>Job Description:</td>
            <td><?php echo $result['jobdesc']; ?></td>
        </tr>
        <tr>
            <td >Required Experience:</td>
            <td><?php echo $result['experience']." "; ?>Years</td>
        </tr>
        <tr>
            <td >Basic Pay:</td>
            <td><?php echo $result['basicpay']; ?></td>
        </tr>
        <tr>
            <td>Functional Area:</td>
            <td><?php echo $result['fnarea']; ?></td>
        </tr>
        <tr>
            <td > Location:</td>
            <td><?php echo $result['location']; ?></td>
        </tr>
        <tr>
            <td>Industry:</td>
            <td><?php echo $result['industry']; ?></td>
        </tr>
        <tr>
            <td>Required UG Qualification:</td>
            <td><?php echo $result['ugqual']; ?></td>
        </tr>
        <tr>
            <td >Required PG Qualification:</td>
            <td><?php echo $result['pgqual']; ?></td>
        </tr>
        <tr>
            <td >Desired Candidate Profile:</td>
            <td><?php echo $result['profile']; ?></td>
        </tr>

  
    </tr>

    </table>
   
    <P></P>
</body>

</html>
