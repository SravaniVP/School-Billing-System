<?php
 session_start();
  require 'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 
 
  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">LOGIN FORM</h2>
  <img src="imgs/a1.svg" width="300" height="300" class="admin"/>
  </center>
  
  <form class="myform" action="index.php" method="post">
   <label><b>Username:</label><br>
   <input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
   <label><b>Password:</label><br>
   <input name="Password" type="Password" class="inputvalues" placeholder="Type your password"/><br>
   <input name="login" type="Submit" id="login_btn" value="Login"/><br>
  <a href="register.php"> <input type="button" id="register_btn" value="Register"/><br></a>
   <a href="findex.php"><input name="logout" type="button" id="Logout_btn" value="Back"/><br></a>
 
  </form>
  <?php
  if(isset($_POST['login']))
 {
    $username=$_POST['username'];
   $password=$_POST['Password'];
    $query="select * from userinfotable WHERE username='$username' AND password='$password'";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {//valid
     $_SESSION['username']=$username;
     header('location:homepage.php');
    }
    else
    {//invalid
    echo '<script type="text/javascript">alert("User has to register")</script>';
    }
    
 }

   

  ?>

 


</body>
</html>
