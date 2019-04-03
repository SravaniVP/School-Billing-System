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

 
 
  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">TEACHER LOGIN</h2>
  <img src="imgs/t1.svg" width="300" height="300" class="admin"/>
  </center>
  
  <form class="myform" action="fteacher.php" method="post">
   <label><b>Username:</label><br>
   <input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
   <label><b>Password:</label><br>
   <input name="Password" type="Password" class="inputvalues" placeholder="Type your password"/><br>
   <input name="login" type="Submit" id="login_btn" value="Login"/><br>
   <a href="findex.php"><input name="logout" type="button" id="Logout_btn" value="Back"/><br></a>
  </form>
  <?php
  if(isset($_POST['login']))
 {
    $username=$_POST['username'];
   $password=$_POST['Password'];
    $query="select * from teacher WHERE fullname='$username' AND id='$password'";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {//valid
     $_SESSION['username']=$username;
      $results=mysqli_fetch_assoc($query_run);
   echo "<a href='teacherprofile.php?id=$results[id]&fullname=$results[fullname]&gender=$results[gender]&subject=$results[subject]&PersonalAddress=$results[PersonalAddress]&EmailId=$results[EmailId]&MobileNo=$results[MobileNo]'>edit</a><br/>";
      }
    
    else
    {//invalid
    echo '<script type="text/javascript">alert("Invalid credentials")</script>';
    }
    
 }

   

  ?>

 


</body>
</html>
