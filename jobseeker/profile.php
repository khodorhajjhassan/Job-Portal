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


    <style><?php include "profile_user.css"?></style>
    <title>Home page<?php echo $row['name']; ?></title> 
    
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
      <li class="nav-item">
        <a class="nav-link" href="jsprofile.php">My Profile</a>
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


<div class="bdy">

     <center><h1  > Welcome </h1><h3 style="color : red"  ><?php echo $row['name']; ?></h3> </center>
    

    <br><br>
    <h3> Find jobs and update your current CV for better jobs!</h3>
</div>
 
    
    <div id="advsearch" class="container mt-3">
       
           <h2 class="tabletitle">Search for jobs</h2>
           <form method="get" action="adv_search.php">
              <table id="customers" class="table" border=3>
                  
                    <td>Location:</td>
                    <td>
                      <input class="input" type="text" id="location" name="location" required placeholder="Your Prefered Location">
                    </td>
                  </tr>
                  <tr>
                    <td>Job Title:</td>
                    <td><input class="input" type="text" id="desig"name="desig" required placeholder="Job Title/ Designation"></td>
                  </tr>
                  <tr>
                    <td>Skills:</td>
                    <td><input class="input" type="text" id="skills" name="skills" required  placeholder="Key Skills"></td>
                  </tr>
                  <tr>
                    <td >Industy type:</td>
                    <td><input class="input" type = "text" id="industry" name="industry" required placeholder="Industry Type"></td>  </tr>
                  <tr>
                      <td></td>
                     <td><input type="submit" class="btn btn-secondary" value="Job Search"></td></td>
              
                  </tr>
              </table>
           
           </form>

         
<Br>

       
        <center><h2>Update Your Profile</h2></center>

        <!-------------------------  CV  ---------------------------- -->

        
    <form action="../upload.php?type=file" enctype="multipart/form-data" method="post">
       <?php if($row['cv']==""){
    echo "<p><strong>Note:</strong> You have'nt uploaded a cv file yet! Upload your cv file for a better job!</p>";
}?>

        <h4><strong>Upload your updated CV file:</strong></h4>
        <hr>
      
            <label for="">Select your CV file:</label>
             <br>
                 <input type="file" name="file" id="cv" class="btn btn-secondary">
                 <br><button  type="submit" name="submit" class="btn btn-success" value="submit">Upload CV</button>
    </form>
    <br>
        <?php if($row['cv']!="") {  
            echo "<p style='color : green'>You have been upload your CV,you can always update your cv file by choose another one !!</h5>";
            

            ?>
            <br>
            <br>
                <?php
                 if($row['cv']!="") {
                echo "<a style='color:white'  href = '../uploads/cv/".$row['cv']."' target='_blank' ><button style='color:white' class='btn btn-secondary'>Download Your Current cv File</button> </a >";
         }?>            <?php
         }?>
        <hr>
        <br>
                <!-------------------------  PROFILE PIC  ---------------------------- -->

     
    <form action="../upload2.php?type=file" enctype="multipart/form-data" method="post">
       <?php if($row['Photo']==""){
    echo "<p><strong>Note:</strong> You have'nt uploaded Your Profile picture </p>";
}?>

        <h4><strong>Upload your Profile picture :</strong></h4>
        <hr>
      
            <label for="">Select your photo :</label>
             
                 <input type="file" class="btn btn-secondary" name="file" id="pic">
                <br> <button  type="submit" class="btn btn-success" name="submit" value="submit">Upload Photo</button>
    </form>
    <br>
        <?php if($row['Photo']!="") {  
            echo "<p style='color:green'>You have been upload your Profile picture</p>";

            ?>
           <br>
                <?php
                 if($row['Photo']!="") {
                echo "<a style='color:white' href = '../uploads/pic/".$row['Photo']."'  target='_blank' ><button style='color:white' class='btn btn-secondary'> Show Your Profile picture</button> </a >";
         }?>            <?php
         }?>

      
</div>
<br>
<br>
<hr>

</body>

</html>
