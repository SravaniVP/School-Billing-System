<?php
require'dbconfi/config.php';
$_GET['id'];
$_GET['fullname'];
$_GET['gender'];
$_GET['subject'];
$_GET['salary'];
$_GET['salarypaid'];
$_GET['PersonalAddress'];
$_GET['EmailId'];
$_GET['MobileNo'];
?>
<!DOCTYPE html>
<html>
<head >
<title>Modify record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">UPDATE TEACHER RECORD</h2>
  <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="updateteacher.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" value="<?php echo $_GET['fullname']?>" required/><br>
   <label><b>Gender:</b></label>
   <input name="gender" type="radio" class="radiobtns" value="<?php echo $_GET['gender']?>"checked required>Male
   <input name="gender" type="radio" class="radiobtns" value="<?php echo $_GET['gender']?>"checked required>Female<br>
   <label><b>subject:</b></label><br>
   <input name="subject" type="text" class="inputvalues" value="<?php echo $_GET['subject']?>" required/><br>
   <label><b>salary:</b></label><br>
   <input name="salary" type="text" class="inputvalues" value="<?php echo $_GET['salary']?>" required/><br>
    <label><b>salary_paid:</b></label><br>
   <input name="salarypaid" type="text" class="inputvalues" value="<?php echo $_GET['salarypaid']?>" required/><br>
   <label><b>Personal Address:</b></label><br>
   <input name="PersonalAddress" type="text" class="inputvalues" value="<?php echo $_GET['PersonalAddress']?>" required/><br>
   <label><b>Email Id:</label><br>
   <input name="EmailId" type="text" class="inputvalues" value="<?php echo $_GET['EmailId']?>" required/><br>
   <label><b>Phone No:</b></label><br>
   <input name="MobileNo" type="text" class="inputvalues" value="<?php echo $_GET['MobileNo']?>" required/><br>
    
    
   <a href="teacher.php"><input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
   <a href="teacher.php"><input type="button" id="Back_btn" value="<<Back to teacher"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
       $id=$_POST['id'];
       $name= $_POST['fullname'];
       $g = $_POST['gender'];
       $subject= $_POST['subject'];
       $salary= $_POST['salary'];
       $salarypaid= $_POST['salarypaid'];
       $PersonalAddress=  $_POST['PersonalAddress']; 
       $EmailId=  $_POST['EmailId'];
       $MobileNo=  $_POST['MobileNo'];
      
   $query="UPDATE teacher SET fullname='$name',gender='$g',subject='$subject',salary='$salary',salarypaid='$salarypaid',PersonalAddress='$PersonalAddress',EmailId='$EmailId',MobileNo='$MobileNo' WHERE subject='$subject'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {
    
    echo '<script type="text/javascript">alert("Updated sucessfully")</script>';
     header('location:teacher.php');
    }
    else
    {
     echo '<script type="text/javascript">alert("Not Updated")</script>';
   }

}
 
 ?>

</body>
</html>














