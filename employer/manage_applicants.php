<?php
include_once('../config.php');
session_start();
$q1=mysqli_query($db1,"select * from application where job_id=$_GET[jobid]");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style><?php include "profile_company.css"?></style>
    <title>Applicant Management</title>
        <script>
        function goBack() {
            window.history.back();
        }
    </script>
     <script type="text/javascript">
    function selectJs(user,job,emp) {
      const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "process_select.php?user=" + user +"&job="+job + "&emp="+emp, true );
  xhttp.send();
    }
   
        function deleteJs(user,job,emp) {
             const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "process_delete.php?user=" + user +"&job="+job + "&emp="+emp, true );
  xhttp.send();
  window.location.reload();

        }
    </script>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
 <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="profile.php">Home Page</a></li>
          <li class="nav-item"><a class="nav-link" href="post_jobs.php">Post New Jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="managejobs.php">Manage jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>

      </ul>   
</nav>
</head>
<body>
 <div class="container">
    <center><h1 style="font-family:verdana;">These users have applied for the job :<center><h2 style="color : red"> <?php echo $q3row['title'];?></h2></center></h1></center><br>
     <button style='color:white' type="button" class="btn btn-success" onclick="goBack()">go back</button><br>
        <br>
    <h4 style='padding-left:15px' >You can view their profile, Select or Delete them.</h4><br>
    
    <?php if(mysqli_num_rows($q1)>0) { ?>
       <center> <table class="table table-bordered">
           <thead>
               <tr>
            <th>Applicant NO:</th>
            <th>Full Name:</th>
            <th>Qualification</th>
            <th>Skills</th>
            <th>Applied Date</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($q1)) {
                
                $user_id=$row['user_id'];
                $q2=mysqli_query($db1,"select * from jobseeker where user_id = $user_id");
$i++;
                while ( $result = mysqli_fetch_array($q2) ) {
                    $qsel=mysqli_query($db1,"select * from selection where job_id=$_GET[jobid] and user_id= $result[user_id]");
                    $ressel=mysqli_fetch_array($qsel);
                    echo " <tr> ";
                    echo "<td>".$i."</td>";
                    echo "<td><button type='button' class='btn btn-info'  ><a style='text-decoration: none; color:white' href='view_js.php?jsid=" . $result['user_id'] . "'>".$result['name']."</a></button></td>";
                    echo "<td> <b>Basic Education: </b> " . $result['basic_edu'].",  <b>Master Education: </b> ".$result['master_edu']."</td>";
                    echo "<td>" . $result['skills'] . "</td>";
                    echo "<td>" . $row['date_applied']."</td>";
                    if(mysqli_num_rows($qsel)==0) {
                        echo "<td> <button type='button' class='btn btn-success' onclick='selectJs(" . $user_id . "," . $_GET['jobid'] . "," . $emp_id . ");'>Select Candidate</button> </td>";
                        echo "<td> <button type='button' class='btn btn-danger' onclick='deleteJs(" . $user_id . "," . $_GET['jobid'] . "," . $emp_id . ");'>Delete Candidate</button> </td>";
                        
                    }
                    else {
                       
                        echo "<td> <h4 style='color: green'>Selected</h4> </td>";
                        
                    }
                  
                    echo "<tr><td colspan='6'><div id='message'></div></td></tr>";
                    echo "</tr>";
                    
                }
                
            }
           
            ?>
        </table>></center>
        </div>
    <?php } else {  echo "NO one apply to this job !";
    }
    ?>
</body>
</html>