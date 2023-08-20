<?php
session_start();
include_once('../config.php');
$empid=$_GET['id'];
$query=mysqli_query($db1,"select * from employer where eid = $empid");
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
    <title>View Employer</title>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>  
                <li class="nav-item"><a class="nav-link" href="view_applied.php">View Applied Jobs</a></li>        
                <li class="nav-item"><a class="nav-link" href="view_selected.php">View Selected Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                    
                
    </ul>
</nav>
<body>

 


    <h2 >Employer: <?php echo $result['ename']; ?></h2>
    <br>
     <button style='color:white' type="button" class="btn btn-success" onclick="goBack()">go back</button><br>

<br>
<table class="table table-dark table-striped" >
    <tr>
        <td class="tbold">Employer Name:</td>
        <td><strong><?php echo $result['ename']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Employer Type:</td>
        <td><?php echo $result['etype']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Industry:</td>
        <td><?php echo $result['industry']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Address:</td>
        <td><?php echo $result['address']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Pincode:</td>
        <td><?php echo $result['pincode']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Executive Name:</td>
        <td><?php echo $result['executive']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Phone Number:</td>
        <td><?php echo $result['phone']; ?></td>
    </tr>
    <tr>
        <td class="tbold">URL company:</td>
        <td><?php echo $result['url']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Main Location:</td>
        <td><?php echo $result['address']; ?></td>
    </tr>
    <tr>
        <td class="tbold">About Company:</td>
        <td><?php echo $result['profile']; ?></td>
    </tr>
</table>
<br>

 

</body>
</html>
