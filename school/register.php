<?php
require'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head >
<title>Registration Page</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 
  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">REGISTRATION FORM</h2>
 <img src="imgs/a1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="register.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" required/><br>
    <label><b>Gender:</b></label>
     <input name="gender" type="radio" class="radiobtns" value="male" checked required>Male
      <input name="gender" type="radio" class="radiobtns" value="Female" checked required>Female<br>
      <label><b>Qualification:</b></label>
      <select class="qualification" name="qualification">
      <option value="BScIT">BScIT</option>
      <option value="BMS">BMS</option>
      <option value="BE.IT">BE.IT</option>
      <option value="MCA">MCA</option>
      </select><br>
   <label><b>Username:</b></label><br>
   <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
   <label><b>Password:</label><br>
   <input name="Password" type="Password" class="inputvalues" placeholder="Your password" required/><br>
    <label><b>Confirm Password:</b></label><br>
   <input name="cpassword" type="Password" class="inputvalues" placeholder="Confirm your password" required/><br>
   <input name="submit_btn" type="Submit" id="SignUp_btn" value="Sign Up"/><br>
   <a href="index.php"><input type="button" id="Back_btn" value="<<Back to Login"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit_btn']))
  {
  echo '<script type="text/javascript">alert("Sign Up button clicked")</script>';
  $fullname=$_POST['fullname'];
  $gender=$_POST['gender'];
  $qualification=$_POST['qualification'];
  $username=$_POST['username'];
  $password=$_POST['Password'];
  $cpassword=$_POST['cpassword'];
  if($password==$cpassword)
  {
   $query="select * from userinfotable WHERE username='$username'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   {
    //there is already a user with same user name
    echo '<script type="text/javascript">alert("user already exists ..try another username")</script>';
    }
    else
    {
     $query="insert into userinfotable values('','$username','$fullname','$gender','$qualification','$password')";
     $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("user registered ...Go to login page")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}

    }

   }
   else
   {echo '<script type="text/javascript">alert("Password and confirm Password doesnot match!")</script>';}

}

 
 ?>





</body>
</html>
