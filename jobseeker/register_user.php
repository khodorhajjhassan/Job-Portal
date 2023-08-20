 <?php
  if(isset($_GET['msg']) && ($_GET['msg']=="cpw")){
          ?>
          <script type='text/javascript'>alert("Register Failed: Yours confirm password are wrong !");</script>
          <?php
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
    <title>JobSeeker Registration</title>
    <style><?php include "register_user.css"?></style>
</head>
<body>
<ul class="nav justify-content-center">
    <li>
      <a href="/Project/index.php">Home</a>
    </li>
    <li>
      <a href="/Project/jobseeker/register_user.php">JobSeeker Registration</a>
    </li>
    <li>
      <a href="/Project/employer/register_emp.php" >Company Registration</a>
    </li>
    <li>
      <a href="/Project/login.php">Login</a>
    </li>
  </ul>

<FORM METHOD="post" ACTION="process_user.php">
<div class="wrapper">
        <div class="title">
            JobSeeker Registration Form
        </div>
<div class="form">        
    <h3 > Your Login Detials </h3>

        <div class="input_field">
        <label  for="email" >Enter your Email ID:</label>
        <input type="email" name="useremail" class="input" required >
        </div>
        <div class="input_field">
        <label for="passnew" > Create new Password:</label>
        <input type="password" id="passnew" name="pass1" class="input" required>
        </div>
        <div class="input_field">
        <label for="passconf">Confirm the Password:</label>
        <input type="password" id="passconf" class="input" name="pass2" required>
        </div>
                 
    <h3 >Your Contact Information</h3>
    
        <div class="input_field">
        <label for="name">Mention your Full Name:</label>
        <input type="text" id="name" class="input" name="uname" required>
        </div>

        <div class="input_field">
        <label for="location"> Enter Your Current Location: </label>
        <input type="text" name="location" class="input" required> 
        </div>

        <div class="input_field">
        <label  for="mobno">Enter your Mobile number:</label>
        <input type="text" name="mobno" class="input" required >
        </div>

    <h3> Your Current Employment Details </h3> 

        <div class="input_field">
            <label for="experience" > How much work experience do you have:</label>
                <div class="custom_select">
                    <select name="experience"  required>
                        <option value="">Select </option>
                        <option value="">none </option>
                        <option value="1">1 year </option>
                        <option value="2">2 year </option>
                        <option value="3">3 year </option>
                        <option value="4">4 year </option>
                        <option value="5">5 year </option>
                        <option value="6">6 year </option>
                        <option value="7">7 year </option>
                        <option value="8">8 year </option>
                        <option value="9+">9+ year </option>
                    </select>
                </div>
        </div>  
        <div class="input_field">
        <label for="skills"> What are your Key Skills:</label>
        <input type="text" name="skills" class="input" required>
        </div>  


    <h3> Your Educational Qualifications </h3>
        <div class="input_field">
            <label for="ugcourse"> Your Basic Education: </label>
                <div class="custom_select">
                    <select name="ugcourse" required>
                        <option value="" label="Select">Select</option>
                        <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
                        <option value="B.A">B.A</option>
                        <option value="B.Arch">B.Arch</option>
                        <option value="BCA">BCA</option>
                        <option value="B.B.A">B.B.A</option>
                        <option value="B.Com">B.Com</option>
                        <option value="B.Ed">B.Ed</option>
                        <option value="BDS">BDS</option>
                        <option value="BHM">BHM</option>
                        <option value="B.Pharma">B.Pharma</option>
                        <option value="B.Sc">B.Sc</option>
                        <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                        <option value="LLB">LLB</option>
                        <option value="MBBS">MBBS</option>
                        <option value="Diploma">Diploma</option>
                        <option value="BVSC">BVSC</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
        </div>
        <div class="input_field">
            <label for="pgcourse"> Your Masters Education:</label>
                <div class="custom_select">
                    <select name="pgcourse" required>
                        <option value="">Select</option>
                        <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
                        <option value="CA">CA</option>
                        <option value="CS">CS</option>
                        <option value="ICWA (CMA)">ICWA (CMA)</option>
                        <option value="Integrated PG">Integrated PG</option>
                        <option value="LLM">LLM</option>
                        <option value="M.A">M.A</option>
                        <option value="M.Arch">M.Arch</option>
                        <option value="M.Com">M.Com</option>
                        <option value="M.Ed">M.Ed</option>
                        <option value="M.Pharma">M.Pharma</option>
                        <option value="M.Sc">M.Sc</option>
                        <option value="M.Tech">M.Tech</option>
                        <option value="MBA/PGDM">MBA/PGDM</option>
                        <option value="MCA">MCA</option>
                        <option value="MS">MS</option>
                        <option value="PG Diploma">PG Diploma</option>
                        <option value="MVSC">MVSC</option>
                        <option value="MCM">MCM</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
        </div>
        <div class="input_field">
        <label for="other qualfication"> Others Qualifications:</label>
        <input class="input" type="text" name="qual" required>
        </div>
    <h3>About Yourself</h3>
        <div class="input_field">
        <label for="date"> Your birthday date:</label>
        <input type="date" name="dob" class="input" required>
        </div> 
        <div class="input_field"> 
        <label for="profile"> Decript yourself</label><br>
        <textarea rows="6" name="desc" class="textarea" required></textarea>
        </div>
        <div class="input_field terms">
        <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
        </label>
       <p>Agreed To Terms And Conditions,<strong>You Can't Update Or Edit Your Profile Later</strong></p>
    </div>
        <div class="inputfield">
            
            <input type="submit" class="btn" value="Register" ><br><br>
            <input type="reset" class="btn1" value="Reset" >
            
        </div>
</div>
</div>
</form>
</body>
</html>