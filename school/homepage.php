<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">HOME PAGE</h2>
  <h3 style="font-size:30px;">Welcome <?php echo $_SESSION['username']
        ?></h3>
  <img src="imgs/avatar.jpg" class="avatar"/>
  </center>
  
  <form class="myform" action="homepage.php" method="post">
   <a href="student.php"> <input type="button" id="student_btn" value="Student"/><br></a>
   <a href="teacher.php"> <input type="button" id="teacher_btn" value="Teacher"/><br></a>
   <input name="logout" type="submit" id="Logout_btn" value="Log Out"/><br>
 
  </form>
   <?php
     if(isset($_POST['logout']))
     {
     session_destroy();
    header('location:findex.php');
     }
     if(isset($_POST['teacher']))
     {
      session_destroy();
      header('location:teacher.php');
      }
    ?>


</body>
</html>
