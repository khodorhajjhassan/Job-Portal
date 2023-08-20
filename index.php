<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB PORTAL</title>
    <style><?php include "index.css"?></style>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
<header class="main">
  <div class="navbar">
    <div class="icon">
      <h2 class="logo">JOB PORTAL</h2>
    </div class="icon">
      <div class="menu">
        <ul class="abc">
          <li style="width:70px" class="home"><a href="index.php">Home</a></li>
          <li style="width:70px" class="animation"><a href="#aboutus" data-scroll-nav="1">About Us</a></li>
          <li style="width:170px" class="animation"><a href="./jobseeker/register_user.php">JobSeeker Registration</a></li>
          <li style="width:150px" class="animation"><a href="./employer/register_emp.php">Employer Registration</a></li>
          <li class="login"><a href="login.php" class="log">Login</a></li>
        </ul class="abc">
      </div class="menu">
  </div class="navbar">
  <br><br><br>
  <div class="text-box">
 
  <br><p> Apply For Your </p><p>Dream Job</p>
</div>
</header class="main">   
<body>
<div class=body1> 
  <h3>Find Your Job</h3>
            <form action="" method="GET">
            <input class="searchbar"type="text" name="search" placeholder="Search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
        </form>
        <br>

        <table  id="customers">
            <thead>
                <tr>
                     <th >Company</th>
                     <th >Position</th>
                     <th >Location</th>
                     <th >PROFILE</th>
                     <th >Post Date</th>
                     <th > Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
             
        
            
                if(isset($_GET['search'])){
                    $keyword=$_GET['search'];
                    $query = "select * from jobs  join employer  on jobs.eid = employer.eid  where title LIKE '%" . $keyword . "%' or employer.ename LIKE '%".$keyword."%' or employer.profile LIKE '%" . $keyword . "%'  or location LIKE '%".$keyword."%' " ;
                    $query_run =mysqli_query($db1,$query);

                    if (mysqli_num_rows($query_run) >0)
                    {
                        foreach($query_run as $items)
                        {
                             
                            ?>
                            <tr>
                                <td><?=$items['ename'];?></td>
                                <td><?=$items['title'];?></td>
                                <td><?=$items['location'];?></td>
                                <td>  <?=$items['profile'];?></td>
                                <td><?=$items['postdate'];?></td>
                                <td><?php
                                          echo "<h4> <a href='login.php'>Login to view more</a> </h4>";?></td>
                            
                            </tr>
                            
                            <?php
                           
                        }
                    }
                    else{
                        ?>
                       
                    <?php
                                                 echo "<h3 style='color:red'> NO Results FOUND :" . $keyword . "</h3> ";

                }
            }


                ?>
            </tbody>
          </table>
          </div>
<br><br>

<div class="section">
  <div class="container">
    <div class="content-section">
      <div class="title" id="aboutus">
        <h1>About Us</h1>
          </div>
          <div class="content">
            <h3>Here is our <strong>Role</strong> and this is what we stand for:</h3>
            <p>We care about giving people the best chance to get a fulfilling job, we appreciate the difficulty and stress that goes into looking for a new job. We treat people as humans, we treat people how we ourselves would like to be treated. We are positive and hopeful of a good outcome, always. We are extremely passionate about helping people to get the best job for them, we believe that getting the right job is very important. We tend to ask questions, we try not to assume answers. We work hard to achieve the best outcome for everyone, we think everyone is a potential winner. We want to use our skills to help you in your job search, and also maybe your life. We will give open and honest feedback,  we think our customers are our best judges. Our employees are our most valuable asset, we expect the best from our staff. We want to connect with people from all walks of life, we look to build relationships and networks. We are inquisitive and constantly strive to learn more and be better at what we do, we appreciate feedback. We want to make a difference.</p>
          <div class="button">
            <a href="">Read More</a>
          </div>
          </div>
          </div>
          </div>
          </div>    




          <div class="footer">
            <h3>Copy Right 2022 &copy By Job Portal All Rights Reserved</h3>
          </div>
    
    
</body>
</html>