<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Page</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">STUDENT INFORMATION</h2>
  
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="student.php" method="post">
   <a href="addrecord.php"><input type="button" id="ADD_btn" value="Add Record"/><br></a>
   <a href="update.php"><input type="button" id="ADD_btn" value="Modify Record"/><br></a>
   <a href="deleterecord.php"><input type="button" id="ADD_btn" value="Delete Record"/><br></a>
   <a href="searchrecord.php"><input type="button" id="ADD_btn" value="Search Record"/><br></a>
   <a href="studentlist.php"><input type="button" id="ADD_btn" value="Student List"/><br></a>
   <a href="fee.php"> <input type="button" id="ADD_btn" value="Fee Details"/><br></a>

   <a href="homepage.php"><input type="button" id="Back_btn" value="<<Back to homepage"/><br></a>
   <input name="logout" type="submit" id="Logout_btn" value="Log Out"/><br>
 
  </form>
   <?php
     if(isset($_POST['logout']))
     {
     session_destroy();
    header('location:findex.php');
     }
     
?>

</body>
</html>
