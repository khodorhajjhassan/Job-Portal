<?php

include_once('../config.php');
session_start();
$jobid=$_GET['jid'];
$query=mysqli_query($db1,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);
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


    <style><?php include "profile_user.css"?></style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
     <script type="text/javascript">
    function apply(jobid) {
      const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("applydiv").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "apply_job.php?jid=" + jobid, true );
  xhttp.send();
    }
    </script>
    
   
    <title>View Job </title>
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-light justify-content-center">  
    <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="view_applied.php">View Applied Jobs</a></li>         
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
    </ul>
                
            
 </nav>
<?php
    $q=mysqli_query($db1,"select * from employer where eid=$result[eid]");
    $res=mysqli_fetch_array($q);
?>

 <div class="bdy">
  <center><h2>Details of <?php echo $result['title']; ?></h2><h3>by</h3> <h3 style="color :red"><?php echo $res['ename']; ?> </h3></center>

 </div>
 
<button  class="btn btn-secondary" onclick="goBack()"> Back </button>
<br>
<br>

         <button class="btn btn-success" type="button"  onclick="apply(<?php echo $result['jobid']; ?>)"> Apply for this Job</button>
         <br>
         <br>
         
         <div id="applydiv"></div>
         <br>


    <h3> Job Details: </h3>
    <hr>

    <table class="table table-dark table-striped">
        <tr>
            <td class="tbold"> Company: </td>
            <td> <?php echo "<h4 style='color : red'><a style='color : red' href='view_emp.php?id=".$res['eid']."'>".$res['ename']."</a></h4>"; ?></td>
        </tr>
        <tr>
            <td class="tbold">Designation:</td>
            <td><?php echo $result['title']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Date of Posting:</td>
            <td><?php echo $result['postdate']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Number of Vacancies: </td>
            <td><?php echo $result['vacno']; ?> </td>
        </tr>
        <tr>
            <td class="tbold">Job Description:</td>
            <td><?php echo $result['jobdesc']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required Experience:</td>
            <td><?php echo $result['experience']." "; ?>Years</td>
        </tr>
        <tr>
            <td class="tbold">Basic Pay:</td>
            <td><?php echo $result['basicpay']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Functional Area:</td>
            <td><?php echo $result['fnarea']; ?></td>
        </tr>
        <tr>
            <td class="tbold"> Location:</td>
            <td><?php echo $result['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Industry:</td>
            <td><?php echo $result['industry']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Degree Qualification:</td>
            <td><?php echo $result['ugqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Master Degree Qualification:</td>
            <td><?php echo $result['pgqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Candidate Profile should be:</td>
            <td><?php echo $result['profile']; ?></td>
        </tr>
        

</table>


</body>

</html>
