<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Teacher Page</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">TEACHER INFORMATION</h2>
  
  <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="teacher.php" method="post">
    <a href="addteacher.php"><input type="button" id="ADD_btn" value="Add Record"/><br></a>
   <a href="tupdate.php"><input type="button" id="ADD_btn" value="Modify Record"/><br></a>
   <a href="deleteteacher.php"><input type="button" id="ADD_btn" value="Delete Record"/><br></a>
    <a href="searchteacher.php"><input type="button" id="ADD_btn" value="Search Record"/><br></a>
   <a href="salary.php"><input type="button" id="ADD_btn" value="Salary Details"/><br></a>
     <a href="homepage.php"><input type="button" id="Back_btn" value="<<Back to Homepage"/><br></a>
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
