
<?php
session_start();
require 'dbconfi/config.php';
echo $_GET['id'];
echo $_GET['fullname'];
 $n=$_GET['fullname'];
      echo $n;
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
  
  <form class="myform" action="viewstudent.php" method="post">
    <input name="viewprofile" type="submit" id="login_btn" value="View Profile"/><br>
   <a href="teacher.php"> <input type="button" id="teacher_btn" value="Marks"/><br></a>
   <input name="logout" type="submit" id="Logout_btn" value="Log Out"/><br>
 
  </form>
   <?php
    echo $n;
     if(isset($_POST['viewprofile']))
     {  
       $query="select * from student WHERE fullname='$n'";
       $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {//valid
      $res=mysqli_fetch_assoc($query_run);
       echo "<a href='studentprofile.php?id=$res[id]&fullname=$res[fullname]&gender=$res[gender]&fathername=$res[fathername]&mothername=$res[mothername]&DateofBirth=$res[DateofBirth]&class=$res[class]&RollNo=$res[RollNo]&PersonalAddress=$res[PersonalAddress]&EmailId=$res[EmailId]&MobileNo=$res[MobileNo]&guardianNo=$res[guardianNo]'>edit</a><br/>";
      }
       else
    {//invalid
    echo '<script type="text/javascript">alert("Invalid credentials")</script>';
    }
      }

     if(isset($_POST['logout']))
     {
     session_destroy();
    header('location:findex.php');
     }
    
    ?>


</body>
</html>
