  <?php
      if(isset($_GET['msg']) && ($_GET['msg']=="failed")){
          ?>
          <script type='text/javascript'>alert("Login Failed: Invalid Username or Password!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=="registered"))
      {
          ?>
      <script type='text/javascript'>alert("Successfully registered, Please login now!");</script>
          <?php
      }
            else if(isset($_GET['msg']) && ($_GET['msg']=="passfailed"))
      {
          ?>
      <script type='text/javascript'>alert("Your confirm password are wrong !!");</script>
       <?php
      }
          ?>
          
          
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style><?php include "login.css"?></style>
</head>
<body>
    <div class="center">
    <h1>Login</h1>
      <form action="process_login.php" method="post">
        <div class="txt_field">
        <input type="email"  required name="email">
            <span></span>
            <label for="" class="">Email address</label>
        </div>
        <div class="txt_field">
        <input type="password" required name="password">
             <span></span>   
             <label for="">Password</label>   
                </div>  
        <div class="pass">Forgot Password?</div>          
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member?<a href="index.php">Register</a>
            </div>     
        </form>
    </div>
</body>
</html>