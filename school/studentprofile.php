<?php
session_start();
require'dbconfi/config.php';
echo $_GET['id'];
echo $_GET['fullname'];
$_GET['gender'];
$_GET['fathername'];
$_GET['mothername'];
$_GET['DateofBirth'];
$_GET['class'];
$_GET['RollNo'];
$_GET['PersonalAddress'];
$_GET['EmailId'];
$_GET['MobileNo'];
$_GET['guardianNo'];
?>
<!DOCTYPE html>
<html>
<head >
<title>Student profile</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">PROFILE</h2>
  <img src="imgs/avatar.jpg" class="avatar"/>
  </center>
  
  <form class="myform" action="studentprofile.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" value="<?php echo $_GET['fullname']?>" required/><br>
    <label><b>Gender:</b></label>
     <input name="gender" type="radio" class="radiobtns" value="<?php echo $_GET['gender']?>"checked required>Male
      <input name="gender" type="radio" class="radiobtns" value="<?php echo $_GET['gender']?>"checked required>Female<br>
        <label><b>Father's name:</b></label><br>
   <input name="fathername" type="text" class="inputvalues" value="<?php echo $_GET['fathername']?>" required/><br>
         <label><b>Mother's name:</b></label><br>
   <input name="mothername" type="text" class="inputvalues" value="<?php echo $_GET['mothername']?>" required/><br>
     <label><b>Date of Birth:</b></label><br>
   <input name="DateofBirth" type="text" class="inputvalues" value="<?php echo $_GET['DateofBirth']?>" required/><br>
       
      <label><b>class:</b></label>
      <input class="class" name="class" value="<?php echo $_GET['class']?>">
      
      
      <br>
     <label><b>Roll No:</b></label><br>
   <input name="RollNo" type="text" class="inputvalues" value="<?php echo $_GET['RollNo']?>" required/><br>
   <label><b>Personal Address:</b></label><br>
   <input name="PersonalAddress" type="text" class="inputvalues" value="<?php echo $_GET['PersonalAddress']?>" required/><br>
   <label><b>Email Id:</label><br>
   <input name="EmailId" type="text" class="inputvalues" value="<?php echo $_GET['EmailId']?>" required/><br>
    <label><b>Parent ph.No:</b></label><br>
   <input name="MobileNo" type="text" class="inputvalues" value="<?php echo $_GET['MobileNo']?>" required/><br>
    <label><b>Guardian ph.No:</b></label><br>
   <input name="guardianNo" type="text" class="inputvalues" value="<?php echo $_GET['guardianNo']?>" required/><br>
    
   <a href="student.php"><input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
   <a href="student.php"><input name="submit" type="submit" id="SignUp_btn" value="View marks"/><br>
   
   <a href="student.php"><input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
       $id=$_POST['id'];
       $name= $_POST['fullname'];
       $g = $_POST['gender'];
       $father= $_POST['fathername'];
       $mothername=  $_POST['mothername'];
       $DateofBirth= $_POST['DateofBirth'];
       $class=  $_POST['class'];
       $RollNo= $_POST['RollNo'];
       $PersonalAddress=  $_POST['PersonalAddress']; 
       $EmailId=  $_POST['EmailId'];
       $MobileNo=  $_POST['MobileNo'];
       $guardianNo= $_POST['guardianNo'];
   $query="UPDATE student SET fullname='$name',gender='$g',fathername='$father',mothername='$mothername',DateofBirth='$DateofBirth',class='$class',RollNo='$RollNo',PersonalAddress='$PersonalAddress',EmailId='$EmailId',MobileNo='$MobileNo',guardianNo='$guardianNo' WHERE RollNo='$RollNo'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {
    
    echo '<script type="text/javascript">alert("Updated sucessfully")</script>';
     header('location:student.php');
    }
    else
    {
     echo '<script type="text/javascript">alert("Not Updated")</script>';
   }

}
 
 ?>

</body>
</html>














