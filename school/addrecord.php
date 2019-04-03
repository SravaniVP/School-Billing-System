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

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">ADD STUDENT RECORD</h2>
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="addrecord.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" required/><br>
    <label><b>Gender:</b></label>
     <input name="gender" type="radio" class="radiobtns" value="male" checked required>Male
      <input name="gender" type="radio" class="radiobtns" value="Female" checked required>Female<br>
        <label><b>Father's name:</b></label><br>
   <input name="fathername" type="text" class="inputvalues" placeholder="Type Father name" required/><br>
         <label><b>Mother's name:</b></label><br>
   <input name="mothername" type="text" class="inputvalues" placeholder="Type mother name" required/><br>
     <label><b>Date of Birth:</b></label><br>
   <input name="DateofBirth" type="text" class="inputvalues" placeholder="year/month/date" required/><br>
       
      <label><b>class:</b></label>
      <select class="class" name="class">
      <option value="Nursery">Nursery</option>
      <option value="LKG">LKG</option>
      <option value="UKG">UKG</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      
      </select><br>
         <label><b>Total Fee:</b></label><br>
   <input name="fee" type="text" class="inputvalues" placeholder="total fee" required/><br>
    <label><b>RollNo</b></label><br>
   <input name="RollNo" type="text" class="inputvalues" placeholder="(*Format-Class|sectin|studentNo-ex:3A16)" required/><br>
   <label><b>Personal Address:</b></label><br>
   <input name="PersonalAddress" type="text" class="inputvalues" placeholder="Address" required/><br>
   <label><b>Email Id:</label><br>
   <input name="EmailId" type="text" class="inputvalues" placeholder="email-address@gmail.com" required/><br>
    <label><b>Parent ph.No:</b></label><br>
   <input name="MobileNo" type="text" class="inputvalues" placeholder="contact no." required/><br>
    <label><b>Guardian ph.No:</b></label><br>
   <input name="guardianNo" type="text" class="inputvalues" placeholder="contact no." required/><br>
    
  <a href="addrecord.php"> <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
   <a href="student.php"><input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
  $fullname=$_POST['fullname'];
  $gender=$_POST['gender'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $DateofBirth=$_POST['DateofBirth'];
  $class=$_POST['class'];
  $fee=$_POST['fee'];
  $RollNo=$_POST['RollNo'];
  $PersonalAddress=$_POST['PersonalAddress'];
  $EmailId=$_POST['EmailId'];
  $MobileNo=$_POST['MobileNo'];
   $guardianNo=$_POST['guardianNo'];
  
   $query="select * from student WHERE fullname='$fullname'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   {
    //there is already a user with same user name
    echo '<script type="text/javascript">alert("student already exist")</script>';
    }
    else
    {
     $query="insert into student values('','$fullname','$gender','$fathername','$mothername','$DateofBirth','$class','$fee','0','$RollNo','$PersonalAddress','$EmailId','$MobileNo','$guardianNo')";
     $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("student record created successfully")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
   }

}
 //if(isset($_POST['submit_btn']))
   //  {
     //session_destroy();
    //header('location:addrecord.php');
    // }
     

 
 ?>


 


</body>
</html>







