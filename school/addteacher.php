<?php
require'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head >
<title>Add record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">ADD TEACHER RECORD</h2>
  
   <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="addteacher.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" required/><br>
    <label><b>Gender:</b></label>
     <input name="gender" type="radio" class="radiobtns" value="male" checked required>Male
      <input name="gender" type="radio" class="radiobtns" value="Female" checked required>Female<br>
    
   
       
      <label><b>subject:</b></label>
      <select class="subject" name="subject">
      <option value="First Language">First Language</option>
      <option value="Hindi">Hindi</option>
      <option value="English">English</option>
      <option value="Maths">Maths</option>
      <option value="science">science</option>
      <option value="social">social</option>
      <option value="GK">GK</option>
      <option value="sports">sports</option>
      <option value="drawing">drawing</option>
      <option value="computer">computer</option>
      
      
      </select><br>
   <label><b>Salary:</b></label><br>
   <input name="salary" type="text" class="inputvalues" placeholder="Salary per annum" required/><br>
   
   <label><b>Personal Address:</b></label><br>
   <input name="PersonalAddress" type="text" class="inputvalues" placeholder="Address" required/><br>
   <label><b>Email Id:</label><br>
   <input name="EmailId" type="text" class="inputvalues" placeholder="email-address@gmail.com" required/><br>
    <label><b>Mobile No:</b></label><br>
   <input name="MobileNo" type="text" class="inputvalues" placeholder="contact no." required/><br>
    
    
  <a href="addteacher.php"> <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
   <a href="teacher.php"><input type="button" id="Back_btn" value="<<Back to teacherpage"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
  $fullname=$_POST['fullname'];
   $gender=$_POST['gender'];
  $subject=$_POST['subject'];
  $salary=$_POST['salary'];
  $PersonalAddress=$_POST['PersonalAddress'];
  $EmailId=$_POST['EmailId'];
  $MobileNo=$_POST['MobileNo'];
  
  
   $query="select * from teacher WHERE fullname='$fullname'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   {
    //there is already a user with same user name
    echo '<script type="text/javascript">alert("teacher already exist")</script>';
    }
    else
    {
     $query="insert into teacher values('','$fullname','$gender','$subject','$salary','0','$PersonalAddress','$EmailId','$MobileNo')";
     $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("teacher record created successfully")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
   }

}
 if(isset($_POST['submit_btn']))
     {
     session_destroy();
    header('location:addteacher.php');
     }
     

 
 ?>





</body>
</html>







